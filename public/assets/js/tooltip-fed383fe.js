import{t}from"./app-e81b91f2.js";/* empty css            */const o=`
        <button id="btn-custom-tooltip" type="button" class="btn btn-primary">
          Custom Tooltip
        </button>

        <script>
          tippy('#btn-custom-tooltip', {
            content: 'I am a tippy tooltip',
            placement: 'auto'
          })
        <\/script>
      `,p=createCodeViewer("#custom-tooltip-code-viewer",o);p.render();t("#btn-custom-tooltip",{content:"I am a tippy tooltip",placement:"auto"});
