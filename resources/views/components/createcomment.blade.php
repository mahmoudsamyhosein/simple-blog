
<form action="/posts/{{$post->id}}/comments" method="POST">
  @csrf
    <div class="form-group">
      <label for="name">الأسم</label>
      <input name="name" class="form-control" id="name" >
    </div>
    <div class="form-group">
        <label for="body">التعليق</label>
        <textarea name="body" class="form-control" id="body" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">حفظ</button>
  </form>
  