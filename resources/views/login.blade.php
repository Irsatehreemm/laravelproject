@extends("master")

@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <h1>Log Page</h1>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">email</label>
                <input type="emailt" class="form-control" id="formGroupExampleInput" placeholder="enter your email">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">password</label>
                <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="enter your password">
            </div>
            <button class="btn btn-primary">Click here</button>
        </div>
    </div>
</div>
@endsection
