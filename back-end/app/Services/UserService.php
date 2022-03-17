<?php

namespace App\Services;

use App\Repositories\UserRepo;

/**
 * Class UserService
 * @package App\Services
 */
class UserService
{
<<<<<<< HEAD
    private UserRepo $repo;

    public function __construct(UserRepo $repo)
    {
        $this->repo = $repo;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return $this->repo->getAll();
=======

    private UserRepo $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    /**
     * @param $email
     * @return \Illuminate\Database\Eloquent\Model|object|null
     */
    public function getByEmail($email)
    {
        return $this->userRepo->getByEmail($email);
    }

    /**
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getList()
    {
        return $this->userRepo->getList();
>>>>>>> upstream/main
    }

    /**
     * @param $attributes
     * @return \Illuminate\Database\Eloquent\Model
     */
<<<<<<< HEAD
    public function create($attributes)
    {
        return $this->repo->create($attributes);
=======
    public function store($attributes)
    {
        return $this->userRepo->create($attributes);
    }

    /**
     * @param $id
     * @param $attributes
     * @return bool|\Illuminate\Database\Eloquent\Model|mixed
     */
    public function update($id, $attributes)
    {
        return $this->userRepo->update($id, $attributes);
    }

    /**
     * @param $id
     * @return bool
     */
    public function destroy($id)
    {
        return $this->userRepo->delete($id);
>>>>>>> upstream/main
    }

    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function findOrFail($id)
    {
<<<<<<< HEAD
        return $this->repo->findOrFail($id);
=======
        return $this->userRepo->findOrFail($id);
>>>>>>> upstream/main
    }
}
