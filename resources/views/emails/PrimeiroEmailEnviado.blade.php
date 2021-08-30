@component('mail::message')
    <h1> Olá, {{$user->name}}. </h1>
    <h2>Boas-vindas a você!</h2>
<p>A e/code é uma Agência Digital, que vem para surpreendê-lo com qualidade e exclusividade em todos os projetos.
    Trabalhamos com idéias originais com o objetivo de transformá-las em um resultado inovador e mensurável.</p>

@component('mail::button', ['url' => 'https://www.agenciaecode.com.br/home#home'])
    Conheça nosso site!
@endcomponent

@endcomponent

