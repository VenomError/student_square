<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">{{ $title }}</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            @foreach ($breadCrump as $name => $url)
                <li class="breadcrumb-item "><a href="{{ $url }}">{{ Str::ucfirst($name) }}</a></li>
            @endforeach
        </ol>
    </div><!-- /.col -->
</div>
