<?php

namespace App\Http\Livewire;

use LaravelViews\Views\TableView;
use Illuminate\Database\Eloquent\Builder;
use App\Models\User;
use LaravelViews\Facades\UI;
use LaravelViews\Views\Traits\WithAlerts;

class UsersTableView extends TableView
{
    protected $model = User::class;

    public function headers(): array
    {
        return [
            'Name',
            'Email',
            'Created',
            'Updated'
        ];
    }

    // public function row($model)
    // {
    //     return [
    //         $model->name,
    //         $model->email,
    //         $model->created_at,
    //         $model->updated_at
    //     ];
    // }

    public function row(User $user)
    {
        return [
            // ...Other fields
            $user->name,
            UI::editable($user, 'email')
        ];
    }

    public function update(User $user, $data)
    {
        $user->update($data);
    }
}
