
<div class="flex items-center gap-2 border-slate-100   w-full px-5">
    <label for="search" class="cursor-pointer">
        <i class="ri-search-line text-blue-500   text-xl"></i>
    </label>
    <input type="text" id="search" class=" w-full h-10 rounded-lg placeholder-text-slate-200  border-slate-300 focus:outline-none focus:border-slate-500 px-4" placeholder="Search by the name of student">
    <button id="cross" class="cursor-pointer">
        <i class="ri-close-line text-blue-500 text-xl"></i>
    </button>
</div>

<script>
    search = document.getElementById('search');
    cross = document.getElementById('cross');
    cross.style.display = 'none';

    // Clearing the search input when the Esc key is pressed
    search.addEventListener('keydown', function(event){
        if (event.key === 'Escape'){
            // Perform search action here
            search.value='';
            cross.style.display='none';
        }
    });

    // Showing the cross icon when there is input in the search field
    search.addEventListener('input', function(){
        if (search.value.length > 0){
            cross.style.display = 'block';
        }else{
            cross.style.display = 'none';
        }
    });

    // Clearing the search input when the cross icon is clicked
    cross.addEventListener('click', function(){
        search.value = '';
        cross.style.display = 'none';
    });
</script>
