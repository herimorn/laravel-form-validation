@extends("layoult.master")
@section("content")
<div class="row mt-5 justify-content-center">
   <div class="col-md-4 ">
        <div class="card">
            @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-primary" role="alert">
                 {{ $error }}
              </div>
            @endforeach
            @endif
            <div class="card-body">
                <form action ="{{ route("login.submit") }}"
                method="post">
                    @csrf
                    <div class="mb-2">
                        <label for="" class="form-label">username</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">submit</button>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection