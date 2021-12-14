@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Control Exchange Program</h3>
    <?php  
        $date = date('m/d/Y h:i:s a', time());
        echo $date;
    ?>
</div>
@endsection
