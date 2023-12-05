@props(['component', 'id', 'table'])


<button 
  wire:key="{{ $id }}"
  wire:click="changeTable({{ $id }})"
  @class([
    'tab-active' => $table == $id,
    'tab'
  ])
  type="button" 
  > {{ $component['name'] }}
</button>
