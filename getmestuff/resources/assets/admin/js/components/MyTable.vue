<template>
    <div>
        <editor :isEditing="editing"
                :dataSet="tableData"
                :url="url"
                @updated="updateRow"
                @cancel="closeEditor"></editor>
        <div class="button-group">
            <button class="btn btn-info" :disabled="!anySelected" @click="editRow">Edit</button>
            <button class="btn btn-danger" :disabled="!anySelected" @click="deleteRow">Delete</button>
        </div>
        <table id="table" class="table table-bordered">
            <thead>
            <slot name="table_head"></slot>
            </thead>
        </table>
    </div>
</template>
<script>
    import Editor from './Editor.vue';

    export default {
        components: { Editor },
        props: ['url', 'columns'],
        data() {
            return {
                items: false,
                dataSet: false,
                table: '',
                tableData: false,
                anySelected: false,
                editing: false
            }
        },
        mounted() {
            this.createTable();
        },
        methods: {
            createTable() {
                 this.table = $('#table').DataTable({
                     processing: true,
                     serverSide: true,
                     lengthChange: false,
                     ajax: this.url,
                     rowId: 'id',
                     columns: this.columns,
                    select: true,
                 });

                 this.table.on('select', () => {
                     this.anySelected = true;
                 });

                this.table.on('deselect', () => {
                    this.anySelected = false;
                });
            },
            editRow() {
                this.tableData = this.table.row({selected: true}).data();
                this.editing = true;
            },
            updateRow(payload) {
                this.editing = false;
                this.table.row({rowId:payload.id}).data(payload).draw();
                this.anySelected = false;
            },
            closeEditor() {
                this.editing = false;
            },
            deleteRow() {
                let id = this.table.row({selected:true}).id();
                if (confirm('Are you sure you want to delete this row?')) {
                    axios.delete(this.url+'/'+id).then(() => {
                        this.table.row({rowId:id}).remove().draw();
                        this.anySelected = false;
                    });
                }
            }
        }
    }
</script>