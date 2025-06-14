<div
    x-data="demo"
    class="max-w-xl mx-auto p-6 bg-white rounded-lg shadow-md mt-10"
>
    Demo 1

    <div>@json($form->options)</div>

    <pre x-text="JSON.stringify(options, null, 2)"></pre>

    <div class="space-y-4 my-4">
        <template x-for="(option, index) in options" :key="index">
            <div class="flex items-center space-x-2">
                <input type="text" x-model="option.text" placeholder="Text" class="border rounded px-2 py-1" />
                <input type="text" x-model="option.explaination" placeholder="Explanation" class="border rounded px-2 py-1" />
                <input type="checkbox" x-model="option.is_correct" />
                <button type="button" @click="options.splice(index, 1)" class="text-red-500">Remove</button>
            </div>
        </template>
    </div>

    <div class="flex space-x-2">
        <button type="button" @click="addOption" class="bg-blue-500 text-white px-3 py-1 rounded">Add Option</button>
        <button type="button" @click="removeOption" class="bg-gray-500 text-white px-3 py-1 rounded">Remove Last</button>
        <button type="button" @click="$wire.$refresh" class="bg-green-500 text-white px-3 py-1 rounded">Save</button>
    </div>
</div>

@script
    <script>
        Alpine.data('demo', () => {
            return {
                options: [],
                init() {
                    this.options = this.$wire.form.options
                },
                addOption() {
                    this.options.push({
                        text: '',
                        explaination: '',
                        is_correct: false,
                    })
                },
                removeOption() {
                    this.options.pop()
                }
            }
        })
    </script>
@endscript
