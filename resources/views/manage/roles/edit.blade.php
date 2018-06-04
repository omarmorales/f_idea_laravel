@extends('layouts.app')

@section('content')
  <div class="flex-container m-t-10 m-l-20 m-r-20">
    <nav class="breadcrumb" aria-label="breadcrumbs">
      <ul>
        <li><a href="">Administration</a></li>
        <li><a href="{{ route('roles.index') }}">Manage Roles</a></li>
        <li class="is-active"><a href="#" aria-current="page">Edit</a></li>
      </ul>
    </nav>

    <h1 class="title">Edit Role</h1>
    <form action="{{ route('roles.update', $role->id) }}" method="POST" id="myform">
      {{csrf_field()}}
      {{ method_field('PUT') }}
      <div class="field">
        <p class="control">
          <label for="display_name" class="label">Name (Human Readable)</label>
          <input type="text" class="input" name="display_name" value="{{$role->display_name}}" id="display_name">
        </p>
      </div>

      <div class="field">
        <label for="name" class="label">Slug (Can not be changed)</label>
        <div class="control">
         <input class="input" type="text" name="name" id="name" value="{{$role->name}}" disabled>
       </div>
      </div>

      <div class="field">
        <p class="control">
          <label for="description" class="label">Description</label>
          <input type="text" class="input" value="{{$role->description}}" id="description" name="description">
        </p>
      </div>

      <div class="field">
        <div class="control">
          <button class="button is-link">Submit</button>
        </div>
      </div>
    </form>
  </div>
@endsection

@section('scripts')
  <script type="text/javascript">
  </script>
@endsection
