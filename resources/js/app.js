import './bootstrap'
import '../css/app.css'

import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm'

console.log(window.livewireScriptConfig.progressBar === 'data-no-progress-bar')

Livewire.start()
