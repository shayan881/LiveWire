<div>
    <div class="card" style="width: 18rem;">
        <img src="{{ $course['image'] }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $course['title'] }}</h5>
            <p class="card-text">{{ $course['description'] }}</p>
            <a href="#" class="btn btn-primary">{{ $course['price'] }}</a>
        </div>
    </div>
</div>