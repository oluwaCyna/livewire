<div id="wrapper" class="py-5">
    <div id="main">
      <div id="display">
          <div id="main-display">
            {{ $result }}
          </div>
      </div>
      <div class="divider"></div>
      <div id="button-wrapper">
          <section class="button-section">
              <div class="button delete" wire:click="clear">C</div>
              <div class="button" wire:click="newInput('(')">(</div>
              <div class="button" wire:click="newInput(')')">)</div>
              <div class="button delete">del</div>
          </section>
          <section class="button-section">
              <div class="button" wire:click="newInput('1')">1</div>
              <div class="button" wire:click="newInput('2')">2</div>
              <div class="button" wire:click="newInput('3')">3</div>
              <div class="button operation" wire:click="sum">+</div>
          </section>
          <section class="button-section">
              <div class="button" wire:click="newInput('4')">4</div>
              <div class="button" wire:click="newInput('5')">5</div>
              <div class="button" wire:click="newInput('6')">6</div>
              <div class="button operation" wire:click="newInput('-')">-</div>
          </section>
          <section class="button-section">
              <div class="button" wire:click="newInput('7')">7</div>
              <div class="button" wire:click="newInput('8')">8</div>
              <div class="button" wire:click="newInput('9')">9</div>
              <div class="button operation" wire:click="newInput('/')">/</div>
          </section>
          <section class="button-section">
              <div class="button" wire:click="newInput('.')">.</div>
              <div class="button" wire:click="newInput('0')">0</div>
              <div id="equals" class="button" wire:click="evaluate">=</div>
              <div class="button operation" wire:click="newInput('*')">*</div>
          </section>
      </div>
      <div class="divider"></div>
    </div>
</div>