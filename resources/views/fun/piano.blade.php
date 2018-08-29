@extends('layout.bootstrap.base')

@section('head')
<style>
  @include('fun.piano.style')
</style>
@endsection

@section('content')
<div class="container">
  <div class="keyboard"></div>
</div>
<div class="settingsBar">
  <div class="left">
    <span>Volume: </span>
    <input type="range" min="0.0" max="1.0" step="0.01"
        value="1" list="volumes" name="volume">
    <datalist id="volumes">
      <option value="0.0" label="Mute">
      <option value="1.0" label="100%">
    </datalist>
  </div>
  <div class="right">
    <span>Current waveform: </span>
    <select name="waveform">
      <option value="sine">Sine</option>
      <option value="square">Square</option>
      <option value="sawtooth">Sawtooth</option>
      <option value="triangle" selected>Triangle</option>
      <option value="custom">Custom</option>
    </select>
  </div>
</div>

<hr>

<div class="container">
  <div class="row">
    <div class="col">
      <p>
        Press any key on the keyboard in the input field to get the
        Unicode character code and the Unicode key code of the pressed key.
      </p>

      <p>
        <strong>Note:</strong> The which and keyCode property does not work on
        the onkeypress event for non-printable, function keys
        (like CAPS LOCK, CTRL, ESC, F12, etc.).
      </p>

      <input
        type="text" size="50"
        onkeypress="uniCharCode(event)" onkeydown="uniKeyCode(event)"
        onkeyup="uniKeyCodeUp(event)"
        autofocus
      > 

      <p>onkeypress - <span id="demo"></span></p>
      <p>onkeydown - <span id="demo2"></span></p>
      <p>onkeyup - <span id="demo3"></span></p>
    </div>
  </div>
</div>
@endsection

@section('body')
<script>
  @include('fun.piano.script')
</script>
@endsection
