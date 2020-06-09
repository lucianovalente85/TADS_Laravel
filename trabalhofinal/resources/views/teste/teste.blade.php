<form action="{{route('teste.store')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="name">Nome: </label>
    <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
  </div>
  <div class="form-group">
    <label for="punctuation">Pontuação mínima para aprovação: </label>
    <input type="number" name="punctuation" id="punctuation" class="form-control" value="{{old('punctuation')}}">
  </div>
  <button class="btn btn-lg btn-sucess">Envair respostas</button>
</form>