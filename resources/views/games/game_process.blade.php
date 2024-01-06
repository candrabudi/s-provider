@extends('layouts.main')
@section('content')
<br><br>
<div class="container pt-1 games-category">

</div>
<script>
    $(function(){
        window.location.href = '<?= $game_url ?>';
    }); 
</script>
@endsection