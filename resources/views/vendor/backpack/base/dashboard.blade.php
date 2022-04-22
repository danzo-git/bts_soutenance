@extends(backpack_view('blank'))

@php
    // $widgets['before_content'][] = [
    //     'type'        => 'jumbotron',
    //     'heading'     => trans('ressources'),
    //     'content'     => trans('backpack::base.use_sidebar'),
    //     'button_link' => backpack_url('logout'),
        
    //     // 'button_link2' => backpack_url('choisir'),
    //     'button_text' => trans('Developpeur'),
    // ];
$stagiaire= count(\DB::table("stagiaires")->get());
    $widgets['before_content'][]=[
    'type'        => 'progress',
    'class'       => 'card text-white bg-primary mb-2',
    'value'       => $stagiaire,
    'description' => 'Stagiaire(s).',
    'progress'    => $stagiaire*100/100, // integer
    'hint'        => '8544 more until next milestone.',
];
$widgets['before_content'][]=[
    'type'        => 'progress',
    'class'       => 'card text-white bg-primary mb-2',
    'value'       => $stagiaire,
    'description' => 'Stagiaire(s).',
    'progress'    => $stagiaire*100/100, // integer
    'hint'        => '8544 more until next milestone.',
]
@endphp

@section('content')
{{-- <button> <a href="  "></a> Developpeur</button> --}}
{{-- <button><a href="{{route('developpeur')}}"></a> ressources</button> --}}
@endsection