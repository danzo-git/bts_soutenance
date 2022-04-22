<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

{{-- <li class='nav-item'><a class='nav-link' href='{{ backpack_url('Encadreur_stagiaire') }}'><i class='nav-icon la la-question'></i> Ressources Humaines</a></li> --}}
<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
      Informatique
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    
      <li class='nav-item'><a class='nav-link' href='{{ backpack_url('stagiaire') }}'><i class='nav-icon la la-question'></i> Stagiaires</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('encadreur') }}'><i class='nav-icon la la-question'></i> Encadreurs</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('session') }}'><i class='nav-icon la la-question'></i> Sessions</a></li>
    </ul>
  </div>
  <div class="dropdown mt-2">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
      Ressources Humaines
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    
      <li class='nav-item'><a class='nav-link' href='{{ backpack_url('stagiaire') }}?id=1'><i class='nav-icon la la-question'></i> Stagiaires</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('encadreur') }}?id=1'><i class='nav-icon la la-question'></i> Encadreurs</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('session') }}'><i class='nav-icon la la-question'></i> Sessions</a></li>
{{-- <li class='nav-item'><a class='nav-link' href='{{ backpack_url('developpeur') }}'><i class='nav-icon la la-question'></i> Sessions</a></li> --}}
    </ul>
  </div>
  