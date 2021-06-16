{if $save}
  <div class="bootstrap">
      <div class="module_configuration  conf confirm alert  alert-success">
         <button type="button" class="close" data-dismiss="alert">X</button>
         {l s='Url saved correctly' mod='ngmodulo'}
      </div>
  </div>
  {/if}   

<form action="" method="post">
 <div  class="form-group">
  <label for="exampleUrl">{l s='Url' mod='ngmodulo'}</label>
  <input type="text" value="{$urlvalue}" class="form-control name" name="exampleUrl" id="exampleUrl"
         aria-describedby="urlHelp" placeholder="Introduzca url">
  <small  id="urlHelp" class="form-text text-muted">{l s='Enter a Url' mod='ngmodulo'}</small>
 </div>
 <button type="submit" name="submitNgModulo" class="btn btn-primary">{l s='Send' mod='ngmodulo'}</button>
</form>
{hook  h='ejemploCustomHook'}