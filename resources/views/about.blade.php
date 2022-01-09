@extends('layouts.main')
@section('container')
  <h1>HALAMAN ABOUT</h1>
  <h5>{{ $nama }}</h5>
  <h5>{{ $email }}</h5>

  <img src="img/{{ $img }}" alt="{{ $nama }}" width="300">

  <h2> I play apex legend and my main hero is Bloodhound </h2><br>
  <h2> The Frontier War is over. After decades of conflict between the IMC and the militia founded to fight them, the region of space known as the Frontier can finally see peace.<br><br>

    But liberation can come at a cost: the Frontier worlds were left barren by the war, and promised aid dwindled to nothing. With no way to support themselves, those who remained had no choice but to leave their homes. The brave relocated to the Outlands.<br><br>
    
    A remote cluster of planets on the fringes of the Frontier, the Outlands are untouched by war and teeming with resources and opportunity. But life is cheap here, and danger lurks around every corner. Its pioneers, explorers, and outlaws used to spend their lives locked in an endless power struggle – now, they settle their differences in the Apex Games, a bloodsport where Legends from all corners of the Frontier compete for money, fame, and glory.
  </h2>
@endsection

