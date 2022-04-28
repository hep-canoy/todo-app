<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo list</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.tutorialjinni.com/font-awesome/6.0.0-beta2/css/all.css" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    
</head>
<body class="bg-secondary">
    <div class="container w-50 mt-5">
        <div class="card shadow-sm">
            <div class="card-body ">
                <h3>Todo List</h3>
                <form action="{{ route('todo.store') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="content" class="form-control" placeholder="Add your todo">
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </form>
            
                    <!-- @if(count($todos))
                    <ul class="list-group list-group-fluid mt-3">
                        @foreach($todos as $todo)
                        <li class="list-group-item">
                            <form action=" {{ route('todo.destroy', $todo->id) }}" method="post">
                                {{ $todo->content }} 
                                @csrf
                                @method('delete')
                                <button type="button" class="btn btn-success btn-sm float-start"><i class="fas fa-check-circle"></i></button>
                                <button type="submit" class="btn btn-danger btn-sm float-end"><i class="fa fa-trash" aria-hidden="true"></i></button>
                              
  

                            </form>
                        </li>
                        @endforeach
                    </ul>
                        @if(count($todos) == 1)
                            <p class="text-center mt-3">You have {{ count($todos) }} pending task</p>
                        @else
                            <p class="text-center mt-3">You have {{ count($todos) }} pending tasks</p>
                        @endif
                        
                    @else
                    <p class="text-center mt-3">No task available.</p>
                    @endif -->

                    @if(count($todos))
                    <div class="list-group list-groupfluid mt-4">
                        @foreach($todos as $todo)
                        <div 
                            @class([
                                'list-group-item d-flex justify-content-between align-items-center',
                                $todo->isDone ? 'rectangle' : ''
                            ])
                        >
                            <div class="sample">
                                <h5>{{ $todo->content }} </h5> 
                            </div>
                            <div class="d-flex justify-content-between">
                                <form action=" {{ route('todo.update', $todo->id) }}" method="post">
                                    @csrf
                                    @method('patch')
                                    <button type="submit" class="btn btn-outline-success btn-sm m-1"><i class="fas fa-check-circle" aria-hidden="true"></i></button> 
                                </form> 
                                <form action=" {{ route('todo.destroy', $todo->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-danger btn-sm m-1"><i class="fa fa-trash" aria-hidden="true"></i></button>  
                                </form> 
                            </div>  
                        </div>   
                        @endforeach 
                    </div>
                        @if(count($todos) == 1)
                            <p class="text-center mt-3">You have {{ count($todos) }} pending task</p>
                        @else
                            <p class="text-center mt-3">You have {{ count($todos) }} pending tasks</p>
                        @endif
                    @else
                    <p class="text-center mt-3">No task available.</p>
                    @endif
                
            </div>
        </div>
    </div>
    





    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>