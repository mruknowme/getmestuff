<h3 class="box-title">Manage All Wishes</h3>
<my-table get="/admin/api/wishes"
          post="/admin/api/wishes"
          :columns="[
                        { data: 'item' },
                        { data: 'current_amount' },
                        { data: 'amount_needed' },
                        { data: 'validated' },
                        { data: 'completed' },
                        { data: 'created_at' }
                     ]"
          :checkboxes="['validated', 'completed']"
          :radio="['validated', 'completed']"
          :skip="['id', 'created_at']">
    <template slot="header">
        <tr>
            <th>Item</th>
            <th>Current Amount</th>
            <th>Amount Needed</th>
            <th>Validated</th>
            <th>Completed</th>
            <th>Created At</th>
        </tr>
    </template>
</my-table>