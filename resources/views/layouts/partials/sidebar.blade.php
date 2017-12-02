<div>
@include('layouts.partials.membernavbar')</div>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<?php
    $classfis = DB::table('classfis')->get();
?>    
    <div class="nav">
       <ul class="sidebar">
            
            @foreach($classfis as $classfi)
            <li class="active">
                <div><a href="">{{$classfi->class}}</a></div>
            </li>  
            @endforeach       
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
