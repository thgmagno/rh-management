<div class="d-flex gap-5">
    <div>
        <i class="fas fa-user me-3"></i>{{ auth()->user()->name }}
    </div>
    <div>
        <i class="fas fa-id-card me-3"></i>{{ auth()->user()->role }}
    </div>
    <div>
        <i class="fas fa-envelope me-3"></i>{{ auth()->user()->email }}
    </div>
    <div>
        <i class="fas fa-calendar-days me-3"></i>{{ auth()->user()->created_at->format('d/m/Y') }}
    </div>
</div>