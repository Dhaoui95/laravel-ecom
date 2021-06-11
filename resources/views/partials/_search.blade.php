<form action="{{route('prod.search')}}" class="col-sm-3">

    <div class="search_box pull-right">
        <input type="text" placeholder="Search" name="q" value="{{request()->q ?? ''}}"/><button type="submit" ><img src="https://img.icons8.com/carbon-copy/100/000000/search.png" height="30px" width="20px"/></button>
    </div>
   
</form>

