{{--This div is all about list of exam--}}
<div class="min-w-70">
    <h1 class="text-xl text-slate-600 font-semibold">List of Recent Exams</h1>
    <ul class="flex justify-between flex-col gap-3">
        @foreach($lists as $list)
            <li class="flex items-center justify-between  py-2">
                                <span>
                                    {{$list}}
                                </span>
                <a class="flex items-center bg-blue-400 rounded-full">
                                    <span class="flex px-2  text-white rounded-full text-sm">
                                    <i class="ri-info-i"></i>
                                    <p>report</p>
                                </span>
                </a>
            </li>
        @endforeach
    </ul>
</div>
