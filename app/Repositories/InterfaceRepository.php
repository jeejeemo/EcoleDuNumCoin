<?php
/**
 * Created by PhpStorm.
 * User: jeanmo
 * Date: 11/01/2018
 * Time: 13:55
 */

namespace App\Repositories;


interface InterfaceRepository
{
    function getAll();
    function getById($id);
    function create(array $attributes);
    function update($id, array $attribute);
    function delete($id);
}