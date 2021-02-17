<?php

namespace App\Repositories;

use App\Models\Employer;

class EmployerRepository
{
    /**
     * @var Employer
     */
    protected $employer;

    /**
     * EmployerRepository constructor.
     *
     * @param Employer $employer
     */
    public function __construct(Employer $employer)
    {
        $this->employer = $employer;
    }

    /**
     * Get all Employers.
     *
     * @return Employer $employer
     */
    public function getAll()
    {
        return $this->employer->get();
    }

    /**
     * Get Employer by id
     *
     * @param $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->employer->where('id', $id)->get();
    }

    /**
     * Save Employer
     *
     * @param $data
     * @return Employer
     */
    public function save($data)
    {
        $employer = new $this->employer;

        $employer->title = $data['name'];
        $employer->dob = $data['dob'];
        $employer->address = $data['address'];
        $employer->email = $data['email'];
        $employer->phone = $data['phone'];

        $employer->save();

        return $employer;
    }

    /**
     * Update Employer
     *
     * @param $data
     * @return Employer
     */
    public function update($data, $id)
    {
        
        $employer = $this->employer->find($id);

        $employer->title = $data['name'];
        $employer->description = $data['dob'];
        $employer->description = $data['address'];
        $employer->description = $data['email'];
        $employer->description = $data['phone'];

        $employer->update();

        return $employer;
    }

    /**
     * Update employer
     *
     * @param $data
     * @return Employer
     */
    public function delete($id)
    {
        
        $employer = $this->employer->find($id);
        $employer->delete();

        return $employer;
    }

}