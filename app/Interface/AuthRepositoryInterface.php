<?php
  namespace App\Interface;
  use App\Repository\AuthRepository;

   Interface AuthRepositoryInterface
  {
    public function post($data);
    public function index();
    public function comment($data);
    public function showcomment();
  }
