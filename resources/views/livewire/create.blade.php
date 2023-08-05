<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name:</label>
          <input wire:model='name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          @error('name')
<span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Rol:</label>
          <input wire:model='rol' type="text" class="form-control" id="exampleInputPassword1">
          @error('rol')
          <span class="text-danger">{{$message}}</span>
                    @enderror
        </div>
        <div class="mb-3 form-check">
            <label class="form-check-label" for="exampleCheck1">Email:</label>
          <input wire:model='email' type="email" class="form-control" id="exampleCheck1">
          @error('email')
          <span class="text-danger">{{$message}}</span>
                    @enderror
        </div>
        <div class="mb-3 form-check">
            <label class="form-check-label" for="phone">Phone:</label>
          <input wire:model=phone type="phone" class="form-control" id="phone">
          @error('phone')
          <span class="text-danger">{{$message}}</span>
                    @enderror
        </div>
        <div class="mb-3 form-check">
            <label class="form-check-label" for="date">Date_of_join:</label>
          <input wire:model=dateofjoin type="date" class="form-control" id="date">
          @error('dateofjoin')
          <span class="text-danger">{{$message}}</span>
                    @enderror
        </div>
        <div class="mb-3 form-check">
            <label class="form-check-label" for="salary">Salary:</label>
          <input wire:model='salary' type="number" class="form-control" id="salary">
          @error('salary')
          <span class="text-danger">{{$message}}</span>
                    @enderror
        </div>

        <button wire:click.prevent='store()' type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>
