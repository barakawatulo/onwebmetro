<?php get_header(); ?>
<main style="padding:160px 6vw;text-align:center;min-height:70vh;display:flex;flex-direction:column;align-items:center;justify-content:center">
    <div style="font-family:'Outfit',sans-serif;font-size:clamp(6rem,15vw,14rem);font-weight:900;color:#F1F1EE;line-height:1;letter-spacing:-4px">404</div>
    <h1 style="font-family:'Outfit',sans-serif;font-size:clamp(1.8rem,3vw,2.8rem);font-weight:800;letter-spacing:-1px;color:#0A0A0A;margin-top:-20px;margin-bottom:20px">
        Page Not Found
    </h1>
    <p style="color:#888;font-size:1.05rem;max-width:440px;line-height:1.75;margin-bottom:40px">
        The page you're looking for doesn't exist or has been moved. Let's get you back on track.
    </p>
    <div style="display:flex;gap:14px;flex-wrap:wrap;justify-content:center">
        <a class="btn-blk" href="<?php echo esc_url( home_url('/') ); ?>" style="display:inline-flex;align-items:center;gap:8px">
            <i class="fas fa-home" style="font-size:.8rem"></i> Go Home
        </a>
        <a class="btn-bdr" href="#contact" style="display:inline-flex;align-items:center;gap:8px">
            Contact Us <i class="fas fa-arrow-right" style="font-size:.8rem"></i>
        </a>
    </div>
</main>
<?php get_footer(); ?>
