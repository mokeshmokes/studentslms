import { useState, useRef, useEffect } from "react";
import { Link } from "react-router";
import {
  Mail, Zap, ArrowLeft, ArrowRight, RotateCcw,
  CheckCircle2, Lock, Eye, EyeOff, Check, ShieldCheck,
} from "lucide-react";

// ── Shared ──────────────────────────────────────────────────────────────────

const inputClass =
  "w-full bg-[#111118] border border-white/[0.08] hover:border-white/[0.14] focus:border-[#6c63ff]/60 rounded-xl py-3 text-sm text-[#e8e8f0] placeholder-[#444458] outline-none transition-all duration-200";

const passwordRules = [
  { label: "8+ characters",  test: (p: string) => p.length >= 8 },
  { label: "Uppercase",      test: (p: string) => /[A-Z]/.test(p) },
  { label: "Number",         test: (p: string) => /\d/.test(p) },
  { label: "Special char",   test: (p: string) => /[!@#$%^&*]/.test(p) },
];
const strengthColors = ["", "#ef4444", "#f59e0b", "#f59e0b", "#10b981"];
const strengthLabels = ["", "Weak", "Fair", "Good", "Strong"];

// ── Left panel ───────────────────────────────────────────────────────────────

const STEPS = [
  { step: "01", label: "Enter your email address" },
  { step: "02", label: "Verify OTP sent to your email" },
  { step: "03", label: "Set your new password" },
];

function LeftPanel({ activeStep }: { activeStep: number }) {
  return (
    <div className="hidden lg:flex flex-col justify-between p-12 bg-[#0d0d15] border-r border-white/[0.06] relative overflow-hidden">
      <div className="absolute -top-32 -left-32 w-[480px] h-[480px] rounded-full bg-[#6c63ff]/10 blur-[120px] pointer-events-none" />
      <div className="absolute bottom-0 right-0 w-72 h-72 rounded-full bg-[#7c3aed]/8 blur-[80px] pointer-events-none" />

      {/* Logo */}
      <div className="flex items-center gap-3 relative z-10">
        <div className="w-9 h-9 rounded-xl bg-[#6c63ff] flex items-center justify-center shadow-lg shadow-[#6c63ff]/30">
          <Zap size={16} className="text-white" fill="white" />
        </div>
        <span className="text-white font-semibold text-lg tracking-tight" style={{ fontFamily: "'Outfit', sans-serif" }}>
          Student LMS
        </span>
      </div>

      {/* Steps */}
      <div className="relative z-10 space-y-8">
        <div className="flex flex-col gap-4">
          {STEPS.map((s, i) => {
            const done = i < activeStep;
            const active = i === activeStep;
            return (
              <div key={s.step} className="flex items-center gap-4">
                <div
                  className={`w-10 h-10 rounded-xl flex items-center justify-center text-xs font-bold shrink-0 transition-all ${
                    done
                      ? "bg-emerald-500/20 text-emerald-400"
                      : active
                      ? "bg-[#6c63ff] text-white shadow-lg shadow-[#6c63ff]/30"
                      : "bg-white/[0.05] text-[#444458]"
                  }`}
                  style={{ fontFamily: "'Geist Mono', monospace" }}
                >
                  {done ? <Check size={14} strokeWidth={2.5} /> : s.step}
                </div>
                <span className={`text-sm font-medium ${active ? "text-white" : done ? "text-emerald-400" : "text-[#444458]"}`}>
                  {s.label}
                </span>
              </div>
            );
          })}
        </div>

        <div className="space-y-3">
          <h2 className="text-2xl font-semibold text-white leading-tight" style={{ fontFamily: "'Outfit', sans-serif" }}>
            Account recovery<br />made simple.
          </h2>
          <p className="text-sm text-[#6b6b80] leading-relaxed max-w-xs">
            We'll send a 6-digit OTP to your registered email. Codes expire after 10 minutes for your protection.
          </p>
        </div>
      </div>

      {/* Security badge */}
      <div className="relative z-10 flex items-center gap-2.5 bg-white/[0.03] border border-white/[0.06] rounded-xl px-4 py-3">
        <div className="w-6 h-6 rounded-lg bg-emerald-500/15 flex items-center justify-center shrink-0">
          <CheckCircle2 size={13} className="text-emerald-400" />
        </div>
        <p className="text-xs text-[#6b6b80]">
          <span className="text-[#c4c4d4] font-medium">256-bit encrypted</span> — OTP expires in 10 min
        </p>
      </div>
    </div>
  );
}

// ── Step 1 — Email ────────────────────────────────────────────────────────────

function StepEmail({ onNext }: { onNext: (email: string) => void }) {
  const [email, setEmail] = useState("");
  const [error, setError] = useState("");
  const [loading, setLoading] = useState(false);

  const isValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    if (!isValid) { setError("Please enter a valid email address."); return; }
    setError("");
    setLoading(true);
    // Simulate sending OTP
    setTimeout(() => { setLoading(false); onNext(email); }, 1400);
  };

  return (
    <div>
      {/* Back button */}
      <Link
        to="/"
        className="inline-flex items-center gap-1.5 text-sm text-[#6b6b80] hover:text-[#c4c4d4] transition-colors mb-8"
      >
        <ArrowLeft size={15} /> Back to Sign in
      </Link>

      <div className="mb-8">
        <div className="w-12 h-12 rounded-2xl bg-[#6c63ff]/15 flex items-center justify-center mb-5">
          <Mail size={22} className="text-[#6c63ff]" />
        </div>
        <h1 className="text-2xl font-semibold text-white tracking-tight mb-2">Forgot password?</h1>
        <p className="text-sm text-[#6b6b80] leading-relaxed">
          No worries. Enter your account email and we'll send you a 6-digit OTP.
        </p>
      </div>

      <form onSubmit={handleSubmit} className="space-y-5">
        <div>
          <label className="block text-xs font-medium text-[#8888a0] mb-1.5">Email address</label>
          <div className="relative">
            <Mail size={15} className="absolute left-3.5 top-1/2 -translate-y-1/2 text-[#444458] pointer-events-none" />
            <input
              type="email"
              value={email}
              onChange={(e) => { setEmail(e.target.value); setError(""); }}
              placeholder="you@example.com"
              className={`${inputClass} pl-10 pr-4`}
              autoComplete="email"
              autoFocus
            />
          </div>
          {error && (
            <p className="text-xs text-[#ef4444] mt-1.5 flex items-center gap-1">
              <span className="inline-block w-1 h-1 rounded-full bg-[#ef4444]" />
              {error}
            </p>
          )}
        </div>

        <button
          type="submit"
          disabled={loading || !email}
          className="w-full flex items-center justify-center gap-2 bg-[#6c63ff] hover:bg-[#5a52e0] disabled:opacity-50 disabled:cursor-not-allowed text-white font-medium text-sm rounded-xl py-3 transition-all duration-200 shadow-lg shadow-[#6c63ff]/20 active:scale-[0.98]"
        >
          {loading ? (
            <><span className="w-4 h-4 border-2 border-white/30 border-t-white rounded-full animate-spin" /> Sending OTP...</>
          ) : (
            <>Send OTP <ArrowRight size={15} /></>
          )}
        </button>
      </form>
    </div>
  );
}

// ── Step 2 — OTP ──────────────────────────────────────────────────────────────

const OTP_LENGTH = 6;

function StepOTP({ email, onNext, onBack }: { email: string; onNext: () => void; onBack: () => void }) {
  const [otp, setOtp] = useState<string[]>(Array(OTP_LENGTH).fill(""));
  const [error, setError] = useState("");
  const [loading, setLoading] = useState(false);
  const [resendCooldown, setResendCooldown] = useState(60);
  const [resendLoading, setResendLoading] = useState(false);
  const inputRefs = useRef<(HTMLInputElement | null)[]>([]);

  // Start cooldown on mount
  useEffect(() => {
    const interval = setInterval(() => {
      setResendCooldown((s) => { if (s <= 1) { clearInterval(interval); return 0; } return s - 1; });
    }, 1000);
    return () => clearInterval(interval);
  }, []);

  const startCooldown = () => {
    setResendCooldown(60);
    const interval = setInterval(() => {
      setResendCooldown((s) => { if (s <= 1) { clearInterval(interval); return 0; } return s - 1; });
    }, 1000);
  };

  const handleChange = (index: number, value: string) => {
    if (!/^\d*$/.test(value)) return;
    const digit = value.slice(-1);
    const next = [...otp];
    next[index] = digit;
    setOtp(next);
    setError("");
    if (digit && index < OTP_LENGTH - 1) inputRefs.current[index + 1]?.focus();
  };

  const handleKeyDown = (index: number, e: React.KeyboardEvent<HTMLInputElement>) => {
    if (e.key === "Backspace" && !otp[index] && index > 0) {
      inputRefs.current[index - 1]?.focus();
    }
  };

  const handlePaste = (e: React.ClipboardEvent) => {
    e.preventDefault();
    const pasted = e.clipboardData.getData("text").replace(/\D/g, "").slice(0, OTP_LENGTH);
    const next = [...otp];
    pasted.split("").forEach((d, i) => { next[i] = d; });
    setOtp(next);
    inputRefs.current[Math.min(pasted.length, OTP_LENGTH - 1)]?.focus();
  };

  const handleVerify = (e: React.FormEvent) => {
    e.preventDefault();
    const code = otp.join("");
    if (code.length < OTP_LENGTH) { setError("Please enter the complete 6-digit OTP."); return; }
    // Simulate verification — accept any 6-digit code
    setLoading(true);
    setTimeout(() => { setLoading(false); onNext(); }, 1200);
  };

  const handleResend = () => {
    if (resendCooldown > 0) return;
    setResendLoading(true);
    setOtp(Array(OTP_LENGTH).fill(""));
    setTimeout(() => { setResendLoading(false); startCooldown(); }, 1000);
  };

  const filled = otp.filter(Boolean).length;

  return (
    <div>
      {/* Back button */}
      <button
        type="button"
        onClick={onBack}
        className="inline-flex items-center gap-1.5 text-sm text-[#6b6b80] hover:text-[#c4c4d4] transition-colors mb-8"
      >
        <ArrowLeft size={15} /> Back
      </button>

      <div className="mb-8">
        <div className="w-12 h-12 rounded-2xl bg-[#6c63ff]/15 flex items-center justify-center mb-5">
          <ShieldCheck size={22} className="text-[#6c63ff]" />
        </div>
        <h1 className="text-2xl font-semibold text-white tracking-tight mb-2">Enter OTP</h1>
        <p className="text-sm text-[#6b6b80] leading-relaxed">
          We sent a 6-digit code to{" "}
          <span className="text-[#e8e8f0] font-medium">{email}</span>
        </p>
      </div>

      <form onSubmit={handleVerify} className="space-y-5">
        {/* OTP boxes */}
        <div>
          <label className="block text-xs font-medium text-[#8888a0] mb-3">Verification code</label>
          <div className="flex gap-2 justify-between" onPaste={handlePaste}>
            {otp.map((digit, i) => (
              <input
                key={i}
                ref={(el) => { inputRefs.current[i] = el; }}
                type="text"
                inputMode="numeric"
                maxLength={1}
                value={digit}
                onChange={(e) => handleChange(i, e.target.value)}
                onKeyDown={(e) => handleKeyDown(i, e)}
                className={`w-11 h-12 text-center text-lg font-semibold bg-[#111118] border rounded-xl text-[#e8e8f0] outline-none transition-all duration-200 shrink-0
                  ${digit ? "border-[#6c63ff]/60 bg-[#6c63ff]/5" : "border-white/[0.08] hover:border-white/[0.14]"}
                  ${error ? "border-[#ef4444]/50" : ""}
                  focus:border-[#6c63ff]/80 focus:bg-[#6c63ff]/8`}
                style={{ fontFamily: "'Geist Mono', monospace" }}
              />
            ))}
          </div>
          {error && (
            <p className="text-xs text-[#ef4444] mt-2 flex items-center gap-1">
              <span className="inline-block w-1 h-1 rounded-full bg-[#ef4444]" />
              {error}
            </p>
          )}
          <p className="text-[11px] text-[#444458] mt-2">
            {filled}/{OTP_LENGTH} digits entered
          </p>
        </div>

        <button
          type="submit"
          disabled={loading || filled < OTP_LENGTH}
          className="w-full flex items-center justify-center gap-2 bg-[#6c63ff] hover:bg-[#5a52e0] disabled:opacity-50 disabled:cursor-not-allowed text-white font-medium text-sm rounded-xl py-3 transition-all duration-200 shadow-lg shadow-[#6c63ff]/20 active:scale-[0.98]"
        >
          {loading ? (
            <><span className="w-4 h-4 border-2 border-white/30 border-t-white rounded-full animate-spin" /> Verifying...</>
          ) : (
            <>Verify OTP <ArrowRight size={15} /></>
          )}
        </button>
      </form>

      {/* Resend */}
      <button
        onClick={handleResend}
        disabled={resendCooldown > 0 || resendLoading}
        className="w-full flex items-center justify-center gap-2 border border-white/[0.08] hover:border-white/[0.15] disabled:opacity-50 disabled:cursor-not-allowed text-[#c4c4d4] hover:text-white font-medium text-sm rounded-xl py-3 transition-all duration-200 mt-3"
      >
        {resendLoading ? (
          <><span className="w-4 h-4 border-2 border-white/20 border-t-white rounded-full animate-spin" /> Resending...</>
        ) : resendCooldown > 0 ? (
          <><RotateCcw size={14} /> Resend OTP in {resendCooldown}s</>
        ) : (
          <><RotateCcw size={14} /> Resend OTP</>
        )}
      </button>
    </div>
  );
}

// ── Step 3 — New Password ─────────────────────────────────────────────────────

function StepNewPassword({ onDone, onBack }: { onDone: () => void; onBack: () => void }) {
  const [password, setPassword] = useState("");
  const [confirmPassword, setConfirmPassword] = useState("");
  const [showPassword, setShowPassword] = useState(false);
  const [showConfirm, setShowConfirm] = useState(false);
  const [loading, setLoading] = useState(false);

  const passwordStrength = passwordRules.filter((r) => r.test(password)).length;
  const passwordsMatch = confirmPassword.length > 0 && password === confirmPassword;
  const passwordMismatch = confirmPassword.length > 0 && password !== confirmPassword;
  const allRulesPassed = passwordStrength === 4;

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    if (!allRulesPassed || passwordMismatch || !passwordsMatch) return;
    setLoading(true);
    setTimeout(() => { setLoading(false); onDone(); }, 1400);
  };

  return (
    <div>
      {/* Back button */}
      <button
        type="button"
        onClick={onBack}
        className="inline-flex items-center gap-1.5 text-sm text-[#6b6b80] hover:text-[#c4c4d4] transition-colors mb-8"
      >
        <ArrowLeft size={15} /> Back
      </button>

      <div className="mb-8">
        <div className="w-12 h-12 rounded-2xl bg-[#6c63ff]/15 flex items-center justify-center mb-5">
          <Lock size={22} className="text-[#6c63ff]" />
        </div>
        <h1 className="text-2xl font-semibold text-white tracking-tight mb-2">Set new password</h1>
        <p className="text-sm text-[#6b6b80] leading-relaxed">
          Choose a strong password for your account.
        </p>
      </div>

      <form onSubmit={handleSubmit} className="space-y-4">
        {/* Password */}
        <div>
          <label className="block text-xs font-medium text-[#8888a0] mb-1.5">New Password</label>
          <div className="relative">
            <Lock size={14} className="absolute left-3.5 top-1/2 -translate-y-1/2 text-[#444458]" />
            <input
              type={showPassword ? "text" : "password"}
              value={password}
              onChange={(e) => setPassword(e.target.value)}
              placeholder="Enter your new password..."
              required
              className={`${inputClass} pl-9 pr-11`}
            />
            <button
              type="button"
              onClick={() => setShowPassword(!showPassword)}
              className="absolute right-3.5 top-1/2 -translate-y-1/2 text-[#444458] hover:text-[#8888a0] transition-colors"
            >
              {showPassword ? <EyeOff size={15} /> : <Eye size={15} />}
            </button>
          </div>

          {/* Strength bar */}
          {password.length > 0 && (
            <div className="mt-2 space-y-2">
              <div className="flex gap-1">
                {[0, 1, 2, 3].map((i) => (
                  <div
                    key={i}
                    className="flex-1 h-1 rounded-full transition-all duration-300"
                    style={{ backgroundColor: i < passwordStrength ? strengthColors[passwordStrength] : "rgba(255,255,255,0.07)" }}
                  />
                ))}
              </div>
              <div className="flex flex-wrap gap-x-3 gap-y-1">
                {passwordRules.map((rule) => (
                  <span
                    key={rule.label}
                    className={`flex items-center gap-1 text-[10px] transition-colors ${rule.test(password) ? "text-emerald-400" : "text-[#555568]"}`}
                  >
                    <Check size={9} strokeWidth={3} />
                    {rule.label}
                  </span>
                ))}
                {passwordStrength > 0 && (
                  <span className="text-[10px] font-semibold ml-auto" style={{ color: strengthColors[passwordStrength] }}>
                    {strengthLabels[passwordStrength]}
                  </span>
                )}
              </div>
            </div>
          )}

          <p className="text-[11px] text-[#ef4444]/80 mt-1.5 leading-relaxed">
            Password must be at least 8 characters long and include one uppercase letter, one number, and one special character.
          </p>
        </div>

        {/* Confirm Password */}
        <div>
          <label className="block text-xs font-medium text-[#8888a0] mb-1.5">Confirm Password</label>
          <div className="relative">
            <Lock size={14} className="absolute left-3.5 top-1/2 -translate-y-1/2 text-[#444458]" />
            <input
              type={showConfirm ? "text" : "password"}
              value={confirmPassword}
              onChange={(e) => setConfirmPassword(e.target.value)}
              placeholder="Re-enter your new password..."
              required
              className={`${inputClass} pl-9 pr-11 ${passwordMismatch ? "border-[#ef4444]/50" : passwordsMatch ? "border-emerald-500/50" : ""}`}
            />
            <button
              type="button"
              onClick={() => setShowConfirm(!showConfirm)}
              className="absolute right-3.5 top-1/2 -translate-y-1/2 text-[#444458] hover:text-[#8888a0] transition-colors"
            >
              {showConfirm ? <EyeOff size={15} /> : <Eye size={15} />}
            </button>
          </div>
          {passwordMismatch && (
            <p className="text-[11px] text-[#ef4444] mt-1.5">Passwords do not match.</p>
          )}
          {passwordsMatch && (
            <p className="text-[11px] text-emerald-400 mt-1.5 flex items-center gap-1">
              <Check size={10} strokeWidth={3} /> Passwords match
            </p>
          )}
        </div>

        <button
          type="submit"
          disabled={loading || !allRulesPassed || !passwordsMatch}
          className="w-full flex items-center justify-center gap-2 bg-[#6c63ff] hover:bg-[#5a52e0] disabled:opacity-50 disabled:cursor-not-allowed text-white font-medium text-sm rounded-xl py-3 transition-all duration-200 shadow-lg shadow-[#6c63ff]/20 active:scale-[0.98] mt-2"
        >
          {loading ? (
            <><span className="w-4 h-4 border-2 border-white/30 border-t-white rounded-full animate-spin" /> Updating password...</>
          ) : (
            <>Reset password <ArrowRight size={15} /></>
          )}
        </button>
      </form>
    </div>
  );
}

// ── Success ───────────────────────────────────────────────────────────────────

function StepSuccess() {
  return (
    <div className="text-center">
      <div className="flex justify-center mb-6">
        <div className="relative">
          <div className="w-16 h-16 rounded-full bg-emerald-500/10 flex items-center justify-center">
            <CheckCircle2 size={32} className="text-emerald-400" />
          </div>
          <div className="absolute inset-0 rounded-full bg-emerald-500/10 animate-ping" style={{ animationDuration: "2s" }} />
        </div>
      </div>
      <h1 className="text-2xl font-semibold text-white tracking-tight mb-2">Password updated!</h1>
      <p className="text-sm text-[#6b6b80] leading-relaxed mb-6">
        Your password has been reset successfully. You can now sign in with your new password.
      </p>
      <Link
        to="/"
        className="inline-flex items-center justify-center gap-2 bg-[#6c63ff] hover:bg-[#5a52e0] text-white font-medium text-sm rounded-xl px-6 py-3 transition-all duration-200 shadow-lg shadow-[#6c63ff]/20"
      >
        Back to Sign in <ArrowRight size={15} />
      </Link>
    </div>
  );
}

// ── Root component ────────────────────────────────────────────────────────────

export default function ForgotPassword() {
  const [step, setStep] = useState<0 | 1 | 2 | 3>(0);
  const [email, setEmail] = useState("");

  return (
    <div className="min-h-screen bg-[#09090f] flex" style={{ fontFamily: "'Outfit', sans-serif" }}>
      <div className="flex flex-1 lg:grid lg:grid-cols-2">
        <LeftPanel activeStep={step < 3 ? step : 2} />

        {/* Right panel */}
        <div className="flex flex-col items-center justify-center px-6 py-12 relative">
          {/* Mobile logo */}
          <div className="lg:hidden flex items-center gap-2.5 mb-10">
            <div className="w-8 h-8 rounded-xl bg-[#6c63ff] flex items-center justify-center shadow-lg shadow-[#6c63ff]/30">
              <Zap size={14} className="text-white" fill="white" />
            </div>
            <span className="text-white font-semibold text-[15px] tracking-tight">Student LMS</span>
          </div>

          <div className="w-full max-w-sm">
            {step === 0 && (
              <StepEmail
                onNext={(e) => { setEmail(e); setStep(1); }}
              />
            )}
            {step === 1 && (
              <StepOTP
                email={email}
                onNext={() => setStep(2)}
                onBack={() => setStep(0)}
              />
            )}
            {step === 2 && (
              <StepNewPassword onDone={() => setStep(3)} onBack={() => setStep(1)} />
            )}
            {step === 3 && <StepSuccess />}
          </div>
        </div>
      </div>
    </div>
  );
}
