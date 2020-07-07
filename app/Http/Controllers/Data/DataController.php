<?php

namespace App\Http\Controllers\Data;
use App\Data;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

class DataController extends Controller
{
    //Показать данные
    public function index()
    {
        $data = $this->getData();
        
        return view('data/index', ['data' => $data, 'search' => session('search')]);
    }

    //Показать форму создания новой записи
    public function create()
    {
        return view('data/form');
    }

    //Сохранить новую запись
    public function store(Request $request)
    {
        $request->validate([
            'purpose' => ['required',
                            'min:3',
                            Rule::unique('data')->where(function($query) use ($request){
                                return $query->where('login', $request->login);
                            })],
            'login' => 'required|min:3',
            'password' => 'required|min:3'
        ]);

        $data = Data::create([
            'purpose' => $request->purpose,
            'login' => $request->login,
            'password' => $request->password,
            'comment' => $request->comment
        ]);

        //Если в сессии сохранено previusUrl, то возвращаемся на эту страницу
        if($request->session()->has('previousUrl')){
            return redirect($request->session()->get('previousUrl'));
        }

        return redirect('/');
    }


    public function show($id)
    {

    }

    //Показать определенную запись данных для редактирования
    public function edit($id)
    {
        $data = Data::findOrFail($id);

        return view('data/form', ['data' => $data]);
    }

    //Обновить определенную запись данных в БД
    public function update(Request $request, $id)
    {
        var_dump($request->all());
        $request->validate([
            'purpose' => ['required',
                            'min:3',
                            Rule::unique('data')->where(function($query) use($request){
                                return $query->where('login', $request->login);
                            })->ignore($id)],
            'login' => 'required|min:3',
            'password' => 'required|min:3'
        ]);

        $data = Data::findOrFail($id);

        $data->update([
            'purpose' => $request->purpose,
            'login' => $request->login,
            'password' => $request->password,
            'comment' => $request->comment
        ]);

        //Если в сессии сохранено previusUrl, то возвращаемся на эту страницу
        if($request->session()->has('previousUrl')){
            return redirect($request->session()->get('previousUrl'));
        }

        return redirect('/');
    }

    //Удалить определенную запись
    public function destroy($id)
    {
        $data = Data::findOrFail($id);
        $data->delete();

        return redirect('/');
    }

    //Меняет режим просмотра главной страницы
    public function changeViewMode(){

        $showAll = session('showAll');
        session(['showAll' => ($showAll ? false : true)]);

        return redirect('/data');

    }

    //Осуществляет поиск данных
    public function search(Request $request){
        //Введенные в поиск данные
        $search = $request->search;
        //Сохраняем в сессии значение поиска
        session(['search' => $search]);

        $data = $this->getData();

        //Добавляем search в URL для отображения в адресе переменной
        return redirect('/data?search='.$search);
    }

    //Чистка результата поиска данных
    public function clear(Request $request){
        //Проверяем, есть ли в сессии search
        $sessionSearch = $request->session()->exists('search');
        //Стираем переменную search из сессии, если она была
        if($sessionSearch){
            $request->session()->forget('search');
        }

        return redirect('/data');  
    }

    //Обращается к БД и возвращает полученные данные
    public function getData(){
        //Сохраняем url страницы для возвращения после создания/редактирования записи
        session(['previousUrl' => url()->full()]);
        
        $data = Data::orderBy('purpose');
        //Переменная показа всех записей
        $showAll = session('showAll');
        //Переменная поиска
        $search = session('search');

        if(!$search){  
            $getData = $data->paginate($showAll ? 1000 : 10);
        }else{
            $getData = $data->where('purpose', 'LIKE', '%'.$search.'%')
                            ->orWhere('login', 'LIKE', '%'.$search.'%')
                            ->orWhere('comment', 'LIKE', '%'.$search.'%')
                            ->orderBy('purpose')
                            ->paginate($showAll ? 1000 : 10);
        };

        return $getData;
    }
}
