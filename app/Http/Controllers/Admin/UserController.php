<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index')->with('users', User::all());//задали переменную и передали в вид также подключили нэймспейс
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(auth::user()->id == $id){
           return redirect()->route('admin.users.index')->with('warning', 'Нет доступа к редактирования профиля администратора');//данная проверка чекает, если авторизованный пользователь(админ) переходит на страницу своей редакци, то редиректить и запретить тк, при редактировании роли панель админки может заблокироваться
        }
        return view('admin.users.edit')->with(['user' => User::find($id), 'roles' => Role::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(auth::user()->id == $id){
           return redirect()->route('admin.users.index')->with('warning', 'Нет доступа к редактирования профиля администратора');//свойства ворнинг и саксес были указаны в массиве сешн в алерте и теперь эти алерты будут вызываться вместе с видами, алерт и ворнинг отвечают за стиль вызванного сообщения
       }
       $user = User::find($id);
       $user->roles()->sync($request->roles);//синхронизирует выбранные роли в виде и передает их в бд вставка и передача осуществляется методом пут который описан в виде
       return redirect()->route('admin.users.index')->with('success', 'Данные были успешно изменены');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(auth::user()->id == $id){
           return redirect()->route('admin.users.index')->with('warning', 'Нельзя удалить страницу администратора');
       }
        //User::destroy($id);
       $user = User::find($id);
       if($user){
       $user->roles()->detach();//разрываем связи между ролями и юзером
       $user->delete();//удаляем
       return redirect()->route('admin.users.index')->with('warning', 'Пользователь был удален');
        }
        return redirect()->route('admin.users.index')->with('success', 'Пользователь не был удален');
    }
}
