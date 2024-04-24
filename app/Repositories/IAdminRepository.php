<?php
namespace App\Repositories;

interface IAdminRepository{
    public function signIn($data);
    public function logOut();
    public function searchProduct($data);
    public function totalsCustomer();
    public function totalsOrders();
    public function totalsMoney();
    public function totalsSaleProducts();
}