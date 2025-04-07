<div>
    @if ($service)
    <img id="image" class="h-[80vh] rounded-xl w-10/12" src="{{ asset($service->image) }}"
       alt="" srcset="">

    <p id="title" class="text-5xl text-white my-3">{{$service->title}}</p>
    <p id="description" class="text-white text-xl">taking useful information out of your data and putting it in a visual
       format to help you make better decisions.</p>
    @else
    <img id="image" class="h-[80vh] rounded-xl w-10/12" src="{{asset($defaultService->image)}}"
    alt="" srcset="">

 <p id="title" class="text-5xl text-white my-3">{{$defaultService->title}}</p>
 <p id="description" class="text-white text-xl">{{$defaultService->description}}</p>
    @endif
</div>


