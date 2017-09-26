<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.3/css/bulma.min.css">
  </head>
  <body>
  <section class="hero is-primary is-bold section">
    <div class="container">
      <h1 class="title">
        Task App
      </h1>
      <p class="subtitle">
        A little tool to keep track of a task list
      </p>
      <a href="{{ route('tasks.make') }}" class="button is-inverted">Add Task</a>
      <a href="{{ route('homePage') }}" class="button is-inverted">Go Back</a>
      <a href="{{ url('tasks/'.$tasks->id.'/edit') }}" class="button is-inverted">Edit Task</a>
      <form action="{{ url('tasks/'.$tasks->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="button is-inverted" style="margin-top: 10px;">Delete Task</button>
      </form>

    </div>
  </section>

    <section class="hero is-light">
		<div class="hero-body">
		  <div class="container">
				<h1 class="is-size-1">{{ $tasks->body }}</h1>
		  </div>
		</div>
    </section>
	
</body>
</html>