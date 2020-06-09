<form action="{{route('post.store')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="enunciated">Enunciado: </label>
    <textarea name="enunciated" id="enunciated" cols="30" rows="10">{{old('content')}}></textarea>
  </div>
  <div class="form-group">
    <label for="answerA">Respota A:</label>
    <input type="text" name="answerA" id="answerA" class="form-control" value="{{old('answerA')}}">
  </div>
  <div class="form-group">
    <label for="answerB">Respota B:</label>
    <input type="text" name="answerB" id="answerB" class="form-control" value="{{old('answerB')}}">
  </div>
  <div class="form-group">
    <label for="answerC">Respota C:</label>
    <input type="text" name="answerC" id="answerC" class="form-control" value="{{old('answerC')}}">
  </div>
  <div class="form-group">
    <label for="answerD">Respota D:</label>
    <input type="text" name="answerD" id="answerD" class="form-control" value="{{old('answerD')}}">
  </div>
  <div class="form-group">
    <label for="answerE">Respota E:</label>
    <input type="text" name="answerE" id="answerE" class="form-control" value="{{old('answerE')}}">
  </div>
  <div class="form-group">
    <label for="rightAnswer">Respota Correta:</label>
    <input type="text" name="rightAnswer" id="rightAnswer" class="form-control" value="{{old('rightAnswer')}}">
  </div>
  <div class="form-group">
    <label for="valueQuestion">Valor da Questão:</label>
    <input type="number" name="valueQuestion" id="valueQuestion" class="form-control" value="{{old('valueQuestion')}}">
  </div>
</form>