<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;

class UsersTable extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }



    public function columns(): array
    {
        return [
            Column::make("Id user 212396", "id_user_212396")
                ->sortable(),
            Column::make("Nama 212396", "nama_212396")
                ->sortable(),
            Column::make("Email 212396", "email_212396")
                ->sortable(),
            Column::make("Alamat 212396", "alamat_212396")
                ->sortable(),
            Column::make("Password 212396", "password_212396")
                ->sortable(),
            Column::make("Hp 212396", "hp_212396")
                ->sortable(),
            Column::make("Role 212396", "role_212396")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
