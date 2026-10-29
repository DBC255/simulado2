<div>
    <form wire:submit.provent='login'>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" wire:model='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">senha</label>
    <input type="password" wire:model='password' class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn-solid theme-primary">enviar</button>
</form>
    {{-- Care about people's approval and you will be their prisoner. --}}
</div>
