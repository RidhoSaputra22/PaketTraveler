<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\PaketTravel;
use Illuminate\Auth\Access\Response;

class PaketTravelPolicy
{
    /**
     * Determine whether the Admin can view any models.
     */
    public function viewAny(Admin $user): bool
    {
        return true;
    }

    /**
     * Determine whether the Admin can view the model.
     */
    public function view(Admin $user, PaketTravel $paketTravel): bool
    {
        return true;
    }

    /**
     * Determine whether the Admin can create models.
     */
    public function create(Admin $user): bool
    {
        return true;
    }

    /**
     * Determine whether the Admin can update the model.
     */
    public function update(Admin $user, PaketTravel $paketTravel): bool
    {
        return true;
    }

    /**
     * Determine whether the Admin can delete the model.
     */
    public function delete(Admin $user, PaketTravel $paketTravel): bool
    {
        return true;
    }

    /**
     * Determine whether the Admin can restore the model.
     */
    public function restore(Admin $user, PaketTravel $paketTravel): bool
    {
        return true;
    }

    /**
     * Determine whether the Admin can permanently delete the model.
     */
    public function forceDelete(Admin $user, PaketTravel $paketTravel): bool
    {
        return true;
    }
}
