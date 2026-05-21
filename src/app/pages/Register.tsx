import { useState } from "react";
import { useNavigate, Link } from "react-router";
import {
  Eye, EyeOff, Zap, ArrowRight, Mail, Lock, User, Phone,
  School, MapPin, Calendar, Check, BadgeCheck,
} from "lucide-react";

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

const INDIAN_STATES = [
  "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chhattisgarh",
  "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jharkhand", "Karnataka",
  "Kerala", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram",
  "Nagaland", "Odisha", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu",
  "Telangana", "Tripura", "Uttar Pradesh", "Uttarakhand", "West Bengal",
  "Delhi", "Puducherry", "Chandigarh",
];

const passwordRules = [
  { label: "8+ characters", test: (p: string) => p.length >= 8 },
  { label: "Uppercase", test: (p: string) => /[A-Z]/.test(p) },
  { label: "Number", test: (p: string) => /\d/.test(p) },
  { label: "Special char", test: (p: string) => /[!@#$%^&*]/.test(p) },
];

function FieldLabel({ children }: { children: React.ReactNode }) {
  return <label className="block text-xs font-medium text-[#8888a0] mb-1.5">{children}</label>;
}

function InputWrapper({ children }: { children: React.ReactNode }) {
  return <div className="relative">{children}</div>;
}

const inputClass =
  "w-full bg-[#111118] border border-white/[0.08] hover:border-white/[0.14] focus:border-[#6c63ff]/60 rounded-xl py-3 text-sm text-[#e8e8f0] placeholder-[#444458] outline-none transition-all duration-200";

export default function Register() {
  const navigate = useNavigate();

  const [form, setForm] = useState({
    firstName: "",
    lastName: "",
    email: "",
    mobile: "",
    schoolName: "",
    studentId: "",
    city: "",
    state: "Tamil Nadu",
    dob: "",
    gender: "",
    password: "",
    confirmPassword: "",
  });
  const [showPassword, setShowPassword] = useState(false);
  const [showConfirm, setShowConfirm] = useState(false);
  const [loading, setLoading] = useState(false);
  const [googleLoading, setGoogleLoading] = useState(false);
  const [agreed, setAgreed] = useState(false);

  const set = (key: keyof typeof form) => (e: React.ChangeEvent<HTMLInputElement | HTMLSelectElement>) =>
    setForm((f) => ({ ...f, [key]: e.target.value }));

  const passwordStrength = passwordRules.filter((r) => r.test(form.password)).length;
  const strengthColors = ["", "#ef4444", "#f59e0b", "#f59e0b", "#10b981"];
  const strengthLabels = ["", "Weak", "Fair", "Good", "Strong"];
  const passwordsMatch = form.confirmPassword.length > 0 && form.password === form.confirmPassword;
  const passwordMismatch = form.confirmPassword.length > 0 && form.password !== form.confirmPassword;

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    if (!agreed || passwordMismatch) return;
    setLoading(true);
    setTimeout(() => { setLoading(false); navigate("/dashboard"); }, 1400);
  };

  const handleGoogle = () => {
    setGoogleLoading(true);
    setTimeout(() => { setGoogleLoading(false); navigate("/dashboard"); }, 1200);
  };

  return (
    <div className="h-screen bg-[#09090f] flex overflow-hidden" style={{ fontFamily: "'Outfit', sans-serif" }}>

      {/* Left branding panel — fixed full height */}
      <div className="hidden lg:flex lg:w-[42%] xl:w-[38%] relative flex-col justify-between p-12 overflow-hidden shrink-0 h-full">
        <div className="absolute inset-0" style={{
          backgroundImage: `linear-gradient(rgba(108,99,255,0.06) 1px,transparent 1px),linear-gradient(90deg,rgba(108,99,255,0.06) 1px,transparent 1px)`,
          backgroundSize: "48px 48px",
        }} />
        <div className="absolute top-1/3 left-1/3 w-80 h-80 bg-[#6c63ff]/20 rounded-full blur-[90px] pointer-events-none" />
        <div className="absolute bottom-1/4 right-1/4 w-56 h-56 bg-[#10b981]/10 rounded-full blur-[70px] pointer-events-none" />

        <div className="relative flex items-center gap-3">
          <div className="w-10 h-10 rounded-xl bg-[#6c63ff] flex items-center justify-center">
            <Zap size={19} className="text-white" fill="white" />
          </div>
          <span className="text-white font-semibold text-xl tracking-tight">StudentLMS</span>
        </div>

        <div className="relative space-y-9">
          <div className="space-y-5">
            <div className="inline-flex items-center gap-2 bg-[#10b981]/10 border border-[#10b981]/20 rounded-full px-4 py-2">
              <span className="w-2 h-2 bg-[#10b981] rounded-full" />
              <span className="text-[#10b981] text-sm font-medium">Completely Free For Students · No subscription needed.</span>
            </div>
            <h1 className="text-5xl font-semibold text-white leading-tight tracking-tight">
              Start Learning<br />
              <span className="text-transparent bg-clip-text bg-gradient-to-r from-[#6c63ff] to-[#10b981]">
                with confidence..
              </span>
            </h1>
            <p className="text-[#6b6b80] text-base leading-relaxed max-w-sm">
              Experience a modern learning environment where students can access study materials, track performance, and collaborate anytime, anywhere.
            </p>
          </div>

          <div className="space-y-3.5">
            {["Easy Access For Materials", "Online exams & assessments", "Instant notifications & updates", "24/7 learning accessibility"].map((f) => (
              <div key={f} className="flex items-center gap-3.5">
                <div className="w-6 h-6 rounded-full bg-[#6c63ff]/20 flex items-center justify-center shrink-0">
                  <Check size={13} className="text-[#6c63ff]" strokeWidth={2.5} />
                </div>
                <span className="text-[#c4c4d4] text-base">{f}</span>
              </div>
            ))}
          </div>

          <div className="flex items-center gap-5">
            <div className="flex -space-x-2.5">
              {["#6c63ff", "#22d3ee", "#f59e0b", "#10b981", "#f43f5e"].map((c, i) => (
                <div key={i} className="w-10 h-10 rounded-full border-2 border-[#09090f] flex items-center justify-center text-xs font-bold text-white" style={{ backgroundColor: c }}>
                  {["JT","ML","SR","AP","KW"][i]}
                </div>
              ))}
            </div>
            <div>
              <p className="text-white text-sm font-semibold">12,000+ students</p>
              <p className="text-[#6b6b80] text-xs mt-0.5">trust our LMS platform</p>
            </div>
          </div>
        </div>

        <p className="relative text-[#444458] text-sm">© 2025 Student LMS Inc. All rights reserved.</p>
      </div>

      {/* Right form panel */}
      <div className="flex-1 flex items-start justify-center px-6 py-10 lg:px-10 overflow-y-auto h-full">
        <div className="w-full max-w-[520px]">

          {/* Mobile logo */}
          <div className="flex items-center gap-2 mb-6 lg:hidden">
            <div className="w-8 h-8 rounded-lg bg-[#6c63ff] flex items-center justify-center">
              <Zap size={15} className="text-white" fill="white" />
            </div>
            <span className="text-white font-semibold">Student LMS</span>
          </div>

          <div className="mb-6">
            <h2 className="text-2xl font-semibold text-white tracking-tight">Create your account</h2>
            <p className="text-[#6b6b80] text-sm mt-1.5">Completly Free For Students · No subscription needed.</p>
          </div>

          {/* Google */}
          <button
            onClick={handleGoogle}
            disabled={googleLoading}
            className="w-full flex items-center justify-center gap-3 bg-[#111118] border border-white/[0.1] hover:border-white/[0.2] hover:bg-[#16161f] text-white text-sm font-medium rounded-xl py-3 transition-all duration-200 disabled:opacity-60 disabled:cursor-not-allowed mb-5"
          >
            {googleLoading
              ? <span className="w-4 h-4 border-2 border-white/20 border-t-white rounded-full animate-spin" />
              : <GoogleIcon />}
            {googleLoading ? "Connecting..." : "Sign up with Google"}
          </button>

          <div className="flex items-center gap-4 mb-5">
            <div className="flex-1 h-px bg-white/[0.07]" />
            <span className="text-[#444458] text-xs">or fill in your details</span>
            <div className="flex-1 h-px bg-white/[0.07]" />
          </div>

          <form onSubmit={handleSubmit} className="space-y-4">

            {/* First Name + Last Name */}
            <div className="grid grid-cols-2 gap-3">
              <div>
                <FieldLabel>First Name</FieldLabel>
                <InputWrapper>
                  <User size={14} className="absolute left-3.5 top-1/2 -translate-y-1/2 text-[#444458]" />
                  <input
                    type="text" value={form.firstName} onChange={set("firstName")}
                    placeholder="Enter your First name..." required
                    className={`${inputClass} pl-9 pr-4`}
                  />
                </InputWrapper>
              </div>
              <div>
                <FieldLabel>Last Name</FieldLabel>
                <InputWrapper>
                  <User size={14} className="absolute left-3.5 top-1/2 -translate-y-1/2 text-[#444458]" />
                  <input
                    type="text" value={form.lastName} onChange={set("lastName")}
                    placeholder="Enter your Last name..." required
                    className={`${inputClass} pl-9 pr-4`}
                  />
                </InputWrapper>
              </div>
            </div>

            {/* Email */}
            <div>
              <FieldLabel>Email</FieldLabel>
              <InputWrapper>
                <Mail size={14} className="absolute left-3.5 top-1/2 -translate-y-1/2 text-[#444458]" />
                <input
                  type="email" value={form.email} onChange={set("email")}
                  placeholder="Enter your Email address..." required
                  className={`${inputClass} pl-9 pr-4`}
                />
              </InputWrapper>
            </div>

            {/* Mobile No */}
            <div>
              <FieldLabel>Mobile No</FieldLabel>
              <InputWrapper>
                <Phone size={14} className="absolute left-3.5 top-1/2 -translate-y-1/2 text-[#444458]" />
                <input
                  type="tel" value={form.mobile} onChange={set("mobile")}
                  placeholder="Enter your Mobile No..." required
                  className={`${inputClass} pl-9 pr-4`}
                />
              </InputWrapper>
            </div>

            {/* School Name */}
            <div>
              <FieldLabel>School Name</FieldLabel>
              <InputWrapper>
                <School size={14} className="absolute left-3.5 top-1/2 -translate-y-1/2 text-[#444458]" />
                <input
                  type="text" value={form.schoolName} onChange={set("schoolName")}
                  placeholder="Enter your School name..." required
                  className={`${inputClass} pl-9 pr-4`}
                />
              </InputWrapper>
            </div>

            {/* Student ID (optional) */}
            <div>
              <FieldLabel>Student Id <span className="text-[#444458] font-normal">(Optional)</span></FieldLabel>
              <InputWrapper>
                <BadgeCheck size={14} className="absolute left-3.5 top-1/2 -translate-y-1/2 text-[#444458]" />
                <input
                  type="text" value={form.studentId} onChange={set("studentId")}
                  placeholder="Enter your Student Id (Optional)..."
                  className={`${inputClass} pl-9 pr-4`}
                />
              </InputWrapper>
            </div>

            {/* City + State */}
            <div className="grid grid-cols-2 gap-3">
              <div>
                <FieldLabel>City / Town</FieldLabel>
                <InputWrapper>
                  <MapPin size={14} className="absolute left-3.5 top-1/2 -translate-y-1/2 text-[#444458]" />
                  <input
                    type="text" value={form.city} onChange={set("city")}
                    placeholder="Enter your City / Town..." required
                    className={`${inputClass} pl-9 pr-4`}
                  />
                </InputWrapper>
              </div>
              <div>
                <FieldLabel>State</FieldLabel>
                <div className="relative">
                  <select
                    value={form.state} onChange={set("state")} required
                    className={`${inputClass} pl-4 pr-8 appearance-none cursor-pointer`}
                  >
                    {INDIAN_STATES.map((s) => (
                      <option key={s} value={s} className="bg-[#111118]">{s}</option>
                    ))}
                  </select>
                  <svg className="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-[#444458]" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M2 4l4 4 4-4" stroke="currentColor" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"/>
                  </svg>
                </div>
              </div>
            </div>

            {/* DOB + Gender */}
            <div className="grid grid-cols-2 gap-3">
              <div>
                <FieldLabel>DOB</FieldLabel>
                <InputWrapper>
                  <Calendar size={14} className="absolute left-3.5 top-1/2 -translate-y-1/2 text-[#444458]" />
                  <input
                    type="date" value={form.dob} onChange={set("dob")} required
                    className={`${inputClass} pl-9 pr-4 [color-scheme:dark]`}
                  />
                </InputWrapper>
              </div>
              <div>
                <FieldLabel>Gender</FieldLabel>
                <div className="flex gap-4 h-[46px] items-center px-4 bg-[#111118] border border-white/[0.08] rounded-xl">
                  {(["Male", "Female"] as const).map((g) => (
                    <label key={g} className="flex items-center gap-2 cursor-pointer group">
                      <div
                        onClick={() => setForm((f) => ({ ...f, gender: g }))}
                        className={`w-4 h-4 rounded-full border flex items-center justify-center transition-all duration-200 cursor-pointer
                          ${form.gender === g ? "border-[#6c63ff] bg-[#6c63ff]" : "border-white/20 hover:border-[#6c63ff]/60"}`}
                      >
                        {form.gender === g && <div className="w-1.5 h-1.5 rounded-full bg-white" />}
                      </div>
                      <span
                        onClick={() => setForm((f) => ({ ...f, gender: g }))}
                        className={`text-sm cursor-pointer transition-colors ${form.gender === g ? "text-white" : "text-[#6b6b80] group-hover:text-[#c4c4d4]"}`}
                      >
                        {g}
                      </span>
                    </label>
                  ))}
                </div>
              </div>
            </div>

            {/* Password */}
            <div>
              <FieldLabel>Password</FieldLabel>
              <InputWrapper>
                <Lock size={14} className="absolute left-3.5 top-1/2 -translate-y-1/2 text-[#444458]" />
                <input
                  type={showPassword ? "text" : "password"}
                  value={form.password} onChange={set("password")}
                  placeholder="Enter your Password..." required
                  className={`${inputClass} pl-9 pr-11`}
                />
                <button type="button" onClick={() => setShowPassword(!showPassword)}
                  className="absolute right-3.5 top-1/2 -translate-y-1/2 text-[#444458] hover:text-[#8888a0] transition-colors">
                  {showPassword ? <EyeOff size={15} /> : <Eye size={15} />}
                </button>
              </InputWrapper>

              {/* Password strength bar */}
              {form.password.length > 0 && (
                <div className="mt-2 space-y-2">
                  <div className="flex gap-1">
                    {[0,1,2,3].map((i) => (
                      <div key={i} className="flex-1 h-1 rounded-full transition-all duration-300"
                        style={{ backgroundColor: i < passwordStrength ? strengthColors[passwordStrength] : "rgba(255,255,255,0.07)" }} />
                    ))}
                  </div>
                  <div className="flex flex-wrap gap-x-3 gap-y-1">
                    {passwordRules.map((rule) => (
                      <span key={rule.label} className={`flex items-center gap-1 text-[10px] transition-colors ${rule.test(form.password) ? "text-emerald-400" : "text-[#555568]"}`}>
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

              {/* Hint */}
              <p className="text-[11px] text-[#ef4444]/80 mt-1.5 leading-relaxed">
                Password must be at least 8 characters long and include one uppercase letter, one number, and one special character.
              </p>
            </div>

            {/* Confirm Password */}
            <div>
              <FieldLabel>Confirm Password</FieldLabel>
              <InputWrapper>
                <Lock size={14} className="absolute left-3.5 top-1/2 -translate-y-1/2 text-[#444458]" />
                <input
                  type={showConfirm ? "text" : "password"}
                  value={form.confirmPassword} onChange={set("confirmPassword")}
                  placeholder="Enter your Confirm Password..." required
                  className={`${inputClass} pl-9 pr-11 ${passwordMismatch ? "border-[#ef4444]/50" : passwordsMatch ? "border-emerald-500/50" : ""}`}
                />
                <button type="button" onClick={() => setShowConfirm(!showConfirm)}
                  className="absolute right-3.5 top-1/2 -translate-y-1/2 text-[#444458] hover:text-[#8888a0] transition-colors">
                  {showConfirm ? <EyeOff size={15} /> : <Eye size={15} />}
                </button>
              </InputWrapper>
              {passwordMismatch && (
                <p className="text-[11px] text-[#ef4444] mt-1.5">Passwords do not match.</p>
              )}
              {passwordsMatch && (
                <p className="text-[11px] text-emerald-400 mt-1.5 flex items-center gap-1">
                  <Check size={10} strokeWidth={3} /> Passwords match
                </p>
              )}
            </div>

            {/* Terms */}
            <div className="flex items-start gap-2.5 pt-1">
              <button type="button" onClick={() => setAgreed(!agreed)}
                className={`w-4 h-4 rounded border flex items-center justify-center shrink-0 mt-0.5 transition-all duration-200
                  ${agreed ? "bg-[#6c63ff] border-[#6c63ff]" : "border-white/[0.15] bg-[#111118] hover:border-[#6c63ff]/60"}`}>
                {agreed && <Check size={9} className="text-white" strokeWidth={2.5} />}
              </button>
              <span className="text-xs text-[#6b6b80] leading-relaxed">
                I agree to the{" "}
                <a href="#" className="text-[#6c63ff] hover:text-[#8b85ff] transition-colors">Terms of Service</a>
                {" "}and{" "}
                <a href="#" className="text-[#6c63ff] hover:text-[#8b85ff] transition-colors">Privacy Policy</a>
              </span>
            </div>

            <button type="submit" disabled={loading || !agreed || passwordMismatch}
              className="w-full flex items-center justify-center gap-2 bg-[#6c63ff] hover:bg-[#5a52e0] text-white font-medium text-sm rounded-xl py-3 transition-all duration-200 disabled:opacity-50 disabled:cursor-not-allowed">
              {loading
                ? <span className="w-4 h-4 border-2 border-white/30 border-t-white rounded-full animate-spin" />
                : <><span>Create account</span><ArrowRight size={15} /></>}
            </button>
          </form>

          <p className="text-center text-sm text-[#6b6b80] mt-5 pb-4">
            Already have an account?{" "}
            <Link to="/" className="text-[#6c63ff] hover:text-[#8b85ff] font-medium transition-colors">Sign in</Link>
          </p>
        </div>
      </div>
    </div>
  );
}
