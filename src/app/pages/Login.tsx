import { useState } from "react";
import { useNavigate, Link } from "react-router";
import { Eye, EyeOff, Zap, ArrowRight, Mail, Lock } from "lucide-react";

function GoogleIcon() {
  return (
    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M17.64 9.2045C17.64 8.5663 17.5827 7.9527 17.4764 7.3636H9V10.845H13.8436C13.635 11.9700 13.0009 12.9231 12.0477 13.5613V15.8195H14.9564C16.6582 14.2527 17.64 11.9454 17.64 9.2045Z" fill="#4285F4"/>
      <path d="M9 18C11.43 18 13.4673 17.1941 14.9564 15.8195L12.0477 13.5613C11.2418 14.1013 10.2109 14.4204 9 14.4204C6.65591 14.4204 4.67182 12.8372 3.96409 10.71H0.957275V13.0418C2.43818 15.9831 5.48182 18 9 18Z" fill="#34A853"/>
      <path d="M3.96409 10.71C3.78409 10.17 3.68182 9.5931 3.68182 9C3.68182 8.4068 3.78409 7.83 3.96409 7.29V4.9581H0.957275C0.347727 6.1731 0 7.5477 0 9C0 10.4522 0.347727 11.8268 0.957275 13.0418L3.96409 10.71Z" fill="#FBBC05"/>
      <path d="M9 3.5795C10.3213 3.5795 11.5077 4.0336 12.4404 4.9254L15.0218 2.3440C13.4632 0.8918 11.4259 0 9 0C5.48182 0 2.43818 2.0168 0.957275 4.9581L3.96409 7.29C4.67182 5.1627 6.65591 3.5795 9 3.5795Z" fill="#EA4335"/>
    </svg>
  );
}

export default function Login() {
  const navigate = useNavigate();
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [showPassword, setShowPassword] = useState(false);
  const [loading, setLoading] = useState(false);
  const [googleLoading, setGoogleLoading] = useState(false);

  const handleLogin = (e: React.FormEvent) => {
    e.preventDefault();
    setLoading(true);
    setTimeout(() => {
      setLoading(false);
      navigate("/dashboard");
    }, 1200);
  };

  const handleGoogle = () => {
    setGoogleLoading(true);
    setTimeout(() => {
      setGoogleLoading(false);
      navigate("/dashboard");
    }, 1200);
  };

  return (
    <div
      className="min-h-screen bg-[#09090f] flex"
      style={{ fontFamily: "'Outfit', sans-serif" }}
    >
      {/* Left panel — branding */}
      <div className="hidden lg:flex lg:w-1/2 xl:w-[55%] relative flex-col justify-between p-12 overflow-hidden">
        {/* Background grid */}
        <div
          className="absolute inset-0"
          style={{
            backgroundImage: `
              linear-gradient(rgba(108,99,255,0.06) 1px, transparent 1px),
              linear-gradient(90deg, rgba(108,99,255,0.06) 1px, transparent 1px)
            `,
            backgroundSize: "48px 48px",
          }}
        />
        {/* Glow */}
        <div className="absolute top-1/4 left-1/4 w-96 h-96 bg-[#6c63ff]/20 rounded-full blur-[100px] pointer-events-none" />
        <div className="absolute bottom-1/4 right-1/4 w-64 h-64 bg-[#22d3ee]/10 rounded-full blur-[80px] pointer-events-none" />

        {/* Logo */}
        <div className="relative flex items-center gap-3">
          <div className="w-9 h-9 rounded-xl bg-[#6c63ff] flex items-center justify-center">
            <Zap size={17} className="text-white" fill="white" />
          </div>
          <span className="text-white font-semibold text-lg tracking-tight">Student LMS</span>
        </div>

        {/* Center content */}
        <div className="relative space-y-8">
          <div className="space-y-4">
            <div className="inline-flex items-center gap-2 bg-[#6c63ff]/10 border border-[#6c63ff]/20 rounded-full px-3 py-1.5">
              <span className="w-1.5 h-1.5 bg-[#6c63ff] rounded-full animate-pulse" />
              <span className="text-[#8b85ff] text-xs font-medium">Trusted by 12,000+ students</span>
            </div>
            <h1 className="text-4xl xl:text-5xl font-semibold text-white leading-tight tracking-tight">
              Learn smarter,<br />
              <span className="text-transparent bg-clip-text bg-gradient-to-r from-[#6c63ff] to-[#22d3ee]">
                grow faster.
              </span>
            </h1>
            <p className="text-[#6b6b80] text-base leading-relaxed max-w-sm">
              From online classes to performance analytics, our LMS helps students stay focused, organized, and ahead in their academic journey.
            </p>
          </div>

          {/* Stats */}
          <div className="flex gap-8">
            {[
              { value: "98.9%", label: "Student Satisfaction" },
              { value: "2.4ms", label: "Fast Platform Access" },
              { value: "24/7", label: "Learning Support" },
            ].map((s) => (
              <div key={s.label}>
                <p className="text-white font-semibold text-xl" style={{ fontFamily: "'Geist Mono', monospace" }}>{s.value}</p>
                <p className="text-[#6b6b80] text-xs mt-0.5">{s.label}</p>
              </div>
            ))}
          </div>

          {/* Testimonial */}
          <div className="bg-[#111118] border border-white/[0.07] rounded-2xl p-5 max-w-sm">
            <p className="text-[#c4c4d4] text-sm leading-relaxed italic">
              "This LMS made learning more organized and interactive. Students can easily access materials, track progress, and submit assignments without confusion."
            </p>
            <div className="flex items-center gap-3 mt-4">
              <div className="w-8 h-8 rounded-full bg-gradient-to-br from-[#6c63ff] to-[#22d3ee] flex items-center justify-center text-xs font-bold text-white">VK</div>
              <div>
                <p className="text-white text-xs font-semibold">Vishnu Karthik</p>
                <p className="text-[#6b6b80] text-[11px]">VC, Prince Group Of Instituions</p>
              </div>
            </div>
          </div>
        </div>

        <p className="relative text-[#444458] text-xs">© 2025 Student LMS Inc. All rights reserved.</p>
      </div>

      {/* Right panel — form */}
      <div className="flex-1 flex items-center justify-center px-6 py-12 lg:px-12">
        <div className="w-full max-w-[400px]">
          {/* Mobile logo */}
          <div className="flex items-center gap-2 mb-8 lg:hidden">
            <div className="w-8 h-8 rounded-lg bg-[#6c63ff] flex items-center justify-center">
              <Zap size={15} className="text-white" fill="white" />
            </div>
            <span className="text-white font-semibold">Student LMS</span>
          </div>

          <div className="mb-8">
            <h2 className="text-2xl font-semibold text-white tracking-tight">Welcome back</h2>
            <p className="text-[#6b6b80] text-sm mt-1.5">Sign in to your Nexus workspace</p>
          </div>

          {/* Google button */}
          <button
            onClick={handleGoogle}
            disabled={googleLoading}
            className="w-full flex items-center justify-center gap-3 bg-[#111118] border border-white/[0.1] hover:border-white/[0.2] hover:bg-[#16161f] text-white text-sm font-medium rounded-xl py-3 transition-all duration-200 disabled:opacity-60 disabled:cursor-not-allowed mb-6"
          >
            {googleLoading ? (
              <span className="w-4 h-4 border-2 border-white/20 border-t-white rounded-full animate-spin" />
            ) : (
              <GoogleIcon />
            )}
            {googleLoading ? "Connecting..." : "Continue with Google"}
          </button>

          {/* Divider */}
          <div className="flex items-center gap-4 mb-6">
            <div className="flex-1 h-px bg-white/[0.07]" />
            <span className="text-[#444458] text-xs">or sign in with email</span>
            <div className="flex-1 h-px bg-white/[0.07]" />
          </div>

          {/* Form */}
          <form onSubmit={handleLogin} className="space-y-4">
            <div className="space-y-1.5">
              <label className="text-xs font-medium text-[#8888a0]">Email address</label>
              <div className="relative">
                <Mail size={15} className="absolute left-3.5 top-1/2 -translate-y-1/2 text-[#444458]" />
                <input
                  type="email"
                  value={email}
                  onChange={(e) => setEmail(e.target.value)}
                  placeholder="you@company.com"
                  required
                  className="w-full bg-[#111118] border border-white/[0.08] hover:border-white/[0.14] focus:border-[#6c63ff]/60 rounded-xl pl-10 pr-4 py-3 text-sm text-[#e8e8f0] placeholder-[#444458] outline-none transition-all duration-200"
                />
              </div>
            </div>

            <div className="space-y-1.5">
              <div className="flex items-center justify-between">
                <label className="text-xs font-medium text-[#8888a0]">Password</label>
                <Link to="/forgot-password" className="text-xs text-[#6c63ff] hover:text-[#8b85ff] transition-colors">
                  Forgot password?
                </Link>
              </div>
              <div className="relative">
                <Lock size={15} className="absolute left-3.5 top-1/2 -translate-y-1/2 text-[#444458]" />
                <input
                  type={showPassword ? "text" : "password"}
                  value={password}
                  onChange={(e) => setPassword(e.target.value)}
                  placeholder="••••••••"
                  required
                  className="w-full bg-[#111118] border border-white/[0.08] hover:border-white/[0.14] focus:border-[#6c63ff]/60 rounded-xl pl-10 pr-11 py-3 text-sm text-[#e8e8f0] placeholder-[#444458] outline-none transition-all duration-200"
                />
                <button
                  type="button"
                  onClick={() => setShowPassword(!showPassword)}
                  className="absolute right-3.5 top-1/2 -translate-y-1/2 text-[#444458] hover:text-[#8888a0] transition-colors"
                >
                  {showPassword ? <EyeOff size={15} /> : <Eye size={15} />}
                </button>
              </div>
            </div>

            <div className="flex items-center gap-2 pt-1">
              <button
                type="button"
                className="w-4 h-4 rounded border border-white/[0.15] bg-[#111118] flex items-center justify-center shrink-0 group hover:border-[#6c63ff]/60 transition-colors"
                onClick={(e) => {
                  const btn = e.currentTarget;
                  btn.classList.toggle("bg-[#6c63ff]");
                  btn.classList.toggle("border-[#6c63ff]");
                }}
              >
                <svg width="9" height="7" viewBox="0 0 9 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 3L3.5 5.5L8 1" stroke="white" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"/>
                </svg>
              </button>
              <span className="text-xs text-[#6b6b80]">Remember me for 30 days</span>
            </div>

            <button
              type="submit"
              disabled={loading}
              className="w-full flex items-center justify-center gap-2 bg-[#6c63ff] hover:bg-[#5a52e0] text-white font-medium text-sm rounded-xl py-3 transition-all duration-200 disabled:opacity-70 disabled:cursor-not-allowed mt-2"
            >
              {loading ? (
                <span className="w-4 h-4 border-2 border-white/30 border-t-white rounded-full animate-spin" />
              ) : (
                <>
                  Sign in
                  <ArrowRight size={15} />
                </>
              )}
            </button>
          </form>

          <p className="text-center text-sm text-[#6b6b80] mt-6">
            Don't have an account?{" "}
            <Link to="/register" className="text-[#6c63ff] hover:text-[#8b85ff] font-medium transition-colors">
              Create account
            </Link>
          </p>
        </div>
      </div>
    </div>
  );
}
