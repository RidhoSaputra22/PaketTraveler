<?php

namespace App\Policies;

use App\Models\FasilitasPaket;
use App\Models\Admin;
use Illuminate\Auth\Access\Response;

class FasilitasPaketPolicy
{
    /**
     * Determine whether the Admin can view any models.
     */
    public function viewAny(Admin $Admin): bool
    {
        return true;
    }

    /**
     * Determine whether the Admin can view the model.
     */
    public function view(Admin $Admin, FasilitasPaket $fasilitasPaket): bool
    {
        return true;
    }

    /**
     * Determine whether the Admin can create models.
     */
    public function create(Admin $Admin): bool
    {
        return true;
    }

    /**
     * Determine whether the Admin can update the model.
     */
    public function update(Admin $Admin, FasilitasPaket $fasilitasPaket): bool
    {
        return true;
    }

    /**
     * Determine whether the Admin can delete the model.
     */
    public function delete(Admin $Admin, FasilitasPaket $fasilitasPaket): bool
    {
        return true;
    }

    /**
     * Determine whether the Admin can restore the model.
     */
    public function restore(Admin $Admin, FasilitasPaket $fasilitasPaket): bool
    {
        return true;
    }

    /**
     * Determine whether the Admin can permanently delete the model.
     */
    public function forceDelete(Admin $Admin, FasilitasPaket $fasilitasPaket): bool
    {
        return true;
    }
}
