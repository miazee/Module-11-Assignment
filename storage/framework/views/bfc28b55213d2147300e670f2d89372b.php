<table>
    <thead>
        <tr>
            <th>Product</th>
            <th>Quantity Sold</th>
            <th>Total Amount</th>
            <th>Sold At</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($sale->product->name); ?></td>
            <td><?php echo e($sale->quantity_sold); ?></td>
            <td><?php echo e($sale->total_amount); ?></td>
            <td><?php echo e($sale->created_at); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH C:\xampp\htdocs\storekeeper\resources\views/sales/history.blade.php ENDPATH**/ ?>