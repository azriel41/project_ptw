<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// master
use App\Departemen;
use App\Direktorat;
use App\Meeting;
use App\Pelatihanpeserta;
use App\Pelatihantrainer;
use App\Pendaftaranpelatihan;
use App\Ruangtraining;
use App\Site;
use App\Trainer;
use App\Unit;
use App\User;
use App\Waktu;

class models extends model
{
  public function Departemen()
  {
      $Departemen = new Departemen(); 

      return $Departemen;
  }
  public function Direktorat()
  {
      $Direktorat = new Direktorat(); 

      return $Direktorat;
  }
  public function Meeting()
  {
      $Meeting = new Meeting(); 

      return $Meeting;
  }
  public function Pelatihanpeserta()
  {
      $Pelatihanpeserta = new Pelatihanpeserta(); 

      return $Pelatihanpeserta;
  }
  public function Pelatihantrainer()
  {
      $Pelatihantrainer = new Pelatihantrainer(); 

      return $Pelatihantrainer;
  }
  public function Pendaftaranpelatihan()
  {
      $Pendaftaranpelatihan = new Pendaftaranpelatihan(); 

      return $Pendaftaranpelatihan;
  }

  public function Ruangtraining()
  {
      $Ruangtraining = new Ruangtraining(); 

      return $Ruangtraining;
  }
  public function Site()
  {
      $Site = new Site(); 

      return $Site;
  }
  public function Trainer()
  {
      $Trainer = new Trainer(); 

      return $Trainer;
  }
  public function Unit()
  {
      $Unit = new Unit(); 

      return $Unit;
  }
  public function User()
  {
      $User = new User(); 

      return $User;
  }
  public function Waktu()
  {
      $Waktu = new Waktu(); 

      return $Waktu;
  }

  public function Karyawan()
  {
      $Karyawan = new Karyawan(); 

      return $Karyawan;
  }

}