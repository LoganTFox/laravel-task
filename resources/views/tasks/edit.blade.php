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
      <a href="{{ route('homePage') }}" class="button is-inverted">Go Home</a>
    </div>
  </section>

<section class="section">
    <form method="POST" action="/tasks">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="field">
        <label class="label">Make Edit</label>
        <div class="control">
          <textarea class="textarea" name="body">{{ $task->body }}</textarea>
        </div>
      </div>

      <div class="field is-grouped">
        <div class="control">
          <button class="button is-primary">Submit Edit</button>
        </div>
      </div>
    </form>
</section>


  </body>
</html>