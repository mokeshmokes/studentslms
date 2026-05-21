import { useState } from "react";
import {
  TrendingUp,
  TrendingDown,
  ArrowUpRight,
  Circle,
  Bell,
  Search,
  Menu,
  Users,
  BarChart3,
  ShoppingCart,
} from "lucide-react";
import {
  AreaChart,
  Area,
  XAxis,
  YAxis,
  CartesianGrid,
  Tooltip,
  ResponsiveContainer,
  BarChart,
  Bar,
  PieChart,
  Pie,
  Cell,
} from "recharts";
import Sidebar from "../components/Sidebar";
import { useAppDispatch, useAppSelector } from "../store/hooks";
import { openMobile } from "../store/sidebarSlice";

// ── Static data ───────────────────────────────────────────────────────────────

const areaData = [
  { month: "Jan", revenue: 42000, users: 3200 },
  { month: "Feb", revenue: 51000, users: 3800 },
  { month: "Mar", revenue: 47000, users: 3500 },
  { month: "Apr", revenue: 63000, users: 4200 },
  { month: "May", revenue: 58000, users: 4000 },
  { month: "Jun", revenue: 72000, users: 5100 },
  { month: "Jul", revenue: 68000, users: 4800 },
  { month: "Aug", revenue: 85000, users: 5900 },
  { month: "Sep", revenue: 91000, users: 6400 },
  { month: "Oct", revenue: 87000, users: 6100 },
  { month: "Nov", revenue: 103000, users: 7200 },
  { month: "Dec", revenue: 118000, users: 8300 },
];

const barData = [
  { day: "Mon", sales: 4200 },
  { day: "Tue", sales: 5800 },
  { day: "Wed", sales: 3900 },
  { day: "Thu", sales: 7100 },
  { day: "Fri", sales: 6400 },
  { day: "Sat", sales: 4800 },
  { day: "Sun", sales: 3200 },
];

const pieData = [
  { name: "Direct",   value: 35 },
  { name: "Organic",  value: 28 },
  { name: "Referral", value: 22 },
  { name: "Social",   value: 15 },
];

const PIE_COLORS = ["#6c63ff", "#22d3ee", "#f59e0b", "#10b981"];

const activities = [
  { user: "Sarah Chen",   action: "Upgraded to Pro",          time: "2 min ago",  avatar: "SC", color: "#6c63ff" },
  { user: "Marcus Webb",  action: "New subscription",         time: "14 min ago", avatar: "MW", color: "#22d3ee" },
  { user: "Priya Sharma", action: "Submitted support ticket", time: "31 min ago", avatar: "PS", color: "#f59e0b" },
  { user: "Jordan Kim",   action: "Cancelled plan",           time: "1 hr ago",   avatar: "JK", color: "#ef4444" },
  { user: "Elena Russo",  action: "Team invite accepted",     time: "2 hr ago",   avatar: "ER", color: "#10b981" },
  { user: "Daniel Ford",  action: "API key generated",        time: "3 hr ago",   avatar: "DF", color: "#7c3aed" },
];

const topPages = [
  { page: "/dashboard",   views: 12480, change: 12.4  },
  { page: "/pricing",     views: 8932,  change: 7.2   },
  { page: "/docs/api",    views: 6211,  change: -3.1  },
  { page: "/blog/launch", views: 5840,  change: 28.9  },
  { page: "/login",       views: 4390,  change: 1.5   },
];

const statCards = [
  { label: "Total Revenue",    value: "$118,240", change: 14.2, sub: "vs last month", icon: TrendingUp,  color: "#6c63ff" },
  { label: "Active Users",     value: "8,312",    change: 8.7,  sub: "vs last month", icon: Users,       color: "#22d3ee" },
  { label: "Conversion Rate",  value: "3.84%",    change: -1.2, sub: "vs last month", icon: BarChart3,   color: "#f59e0b" },
  { label: "Avg. Order Value", value: "$284",     change: 5.6,  sub: "vs last month", icon: ShoppingCart,color: "#10b981" },
];

// ── Sub-components ────────────────────────────────────────────────────────────

function StatCard({ stat }: { stat: typeof statCards[0] }) {
  const Icon = stat.icon;
  const positive = stat.change >= 0;
  return (
    <div className="bg-[#111118] border border-white/[0.07] rounded-xl p-5 hover:border-white/[0.12] transition-all duration-200">
      <div className="flex items-start justify-between mb-4">
        <div
          className="w-10 h-10 rounded-lg flex items-center justify-center"
          style={{ backgroundColor: `${stat.color}18` }}
        >
          <Icon size={18} style={{ color: stat.color }} />
        </div>
        <span
          className={`flex items-center gap-1 text-xs font-semibold px-2 py-1 rounded-full
            ${positive ? "bg-emerald-500/10 text-emerald-400" : "bg-red-500/10 text-red-400"}`}
        >
          {positive ? <TrendingUp size={11} /> : <TrendingDown size={11} />}
          {Math.abs(stat.change)}%
        </span>
      </div>
      <p className="text-[#6b6b80] text-xs font-medium mb-1">{stat.label}</p>
      <p className="text-2xl font-semibold text-white tracking-tight">{stat.value}</p>
      <p className="text-[#444458] text-xs mt-1">{stat.sub}</p>
    </div>
  );
}

const CustomTooltip = ({ active, payload, label }: {
  active?: boolean;
  payload?: { dataKey: string; color: string; name: string; value: number }[];
  label?: string;
}) => {
  if (!active || !payload?.length) return null;
  return (
    <div
      className="bg-[#16161f] border border-white/10 rounded-lg px-3 py-2 shadow-xl text-xs"
      style={{ fontFamily: "'Outfit', sans-serif" }}
    >
      <p className="text-[#8888a0] mb-1">{label}</p>
      {payload.map((p) => (
        <p key={p.dataKey} style={{ color: p.color }} className="font-semibold">
          {p.name === "revenue"
            ? `$${(p.value / 1000).toFixed(0)}k`
            : p.value.toLocaleString()}
        </p>
      ))}
    </div>
  );
};

// ── Dashboard page ────────────────────────────────────────────────────────────

export default function Dashboard() {
  const dispatch   = useAppDispatch();
  const collapsed  = useAppSelector((s) => s.sidebar.collapsed);
  const activeItem = useAppSelector((s) => s.sidebar.activeItem);

  // Local UI state — chart tab is purely local, no need for Redux
  const [chartTab, setChartTab] = useState<"revenue" | "users">("revenue");

  return (
    <div
      className="min-h-screen bg-[#09090f] text-[#e8e8f0]"
      style={{ fontFamily: "'Outfit', sans-serif" }}
    >
      {/* Redux-connected sidebar */}
      <Sidebar />

      {/* Main content — offset by sidebar width from Redux state */}
      <div
        className="transition-all duration-300 ease-in-out min-h-screen flex flex-col"
        style={{ marginLeft: collapsed ? 68 : 240 }}
      >
        {/* Header */}
        <header className="sticky top-0 z-30 bg-[#09090f]/80 backdrop-blur-md border-b border-white/[0.06] flex items-center gap-4 px-6 h-14">
          <button
            className="lg:hidden text-[#6b6b80] hover:text-white transition-colors"
            onClick={() => dispatch(openMobile())}
          >
            <Menu size={20} />
          </button>

          <div className="flex-1 max-w-sm">
            <div className="relative">
              <Search size={14} className="absolute left-3 top-1/2 -translate-y-1/2 text-[#444458]" />
              <input
                type="text"
                placeholder="Search anything..."
                className="w-full bg-[#1a1a24] border border-white/[0.07] rounded-lg pl-9 pr-4 py-2 text-sm text-[#e8e8f0] placeholder-[#444458] focus:outline-none focus:border-[#6c63ff]/50 transition-colors"
              />
            </div>
          </div>

          <div className="ml-auto flex items-center gap-2">
            <button className="relative w-9 h-9 flex items-center justify-center rounded-lg text-[#6b6b80] hover:text-white hover:bg-white/5 transition-all duration-200">
              <Bell size={17} />
              <span className="absolute top-1.5 right-1.5 w-2 h-2 bg-[#6c63ff] rounded-full" />
            </button>
            <div className="flex items-center gap-2.5 pl-2 border-l border-white/[0.06]">
              <div className="w-8 h-8 rounded-full bg-gradient-to-br from-[#6c63ff] to-[#7c3aed] flex items-center justify-center text-xs font-semibold text-white">
                AL
              </div>
              <div className="hidden sm:block">
                <p className="text-xs font-semibold text-white leading-tight">Alex Lee</p>
                <p className="text-[10px] text-[#6b6b80]">Student</p>
              </div>
            </div>
          </div>
        </header>

        {/* Page content */}
        <main className="flex-1 px-6 py-8 space-y-6 max-w-[1400px] w-full">
          {/* Page title */}
          <div className="flex items-center justify-between">
            <div>
              <h1 className="text-xl font-semibold text-white tracking-tight">{activeItem}</h1>
              <p className="text-[#6b6b80] text-sm mt-0.5">
                Welcome back, Alex. Here's what's happening.
              </p>
            </div>
            <div className="flex items-center gap-2">
              <button className="flex items-center gap-2 text-sm text-[#8888a0] border border-white/[0.07] rounded-lg px-3 py-2 hover:border-white/[0.14] hover:text-white transition-all duration-200">
                <Circle size={8} className="fill-emerald-400 text-emerald-400" />
                Dec 2025
              </button>
              <button className="text-sm bg-[#6c63ff] text-white rounded-lg px-4 py-2 hover:bg-[#5a52e0] transition-colors duration-200 flex items-center gap-2">
                <ArrowUpRight size={14} />
                Export
              </button>
            </div>
          </div>

          {/* Stat cards */}
          <div className="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4">
            {statCards.map((s) => <StatCard key={s.label} stat={s} />)}
          </div>

          {/* Charts row 1 */}
          <div className="grid grid-cols-1 xl:grid-cols-3 gap-4">
            {/* Area chart */}
            <div className="xl:col-span-2 bg-[#111118] border border-white/[0.07] rounded-xl p-5">
              <div className="flex items-center justify-between mb-5">
                <div>
                  <h2 className="text-sm font-semibold text-white">Performance Overview</h2>
                  <p className="text-[#6b6b80] text-xs mt-0.5">Full year · 2025</p>
                </div>
                <div className="flex gap-1 bg-[#1a1a24] rounded-lg p-1">
                  {(["revenue", "users"] as const).map((t) => (
                    <button
                      key={t}
                      onClick={() => setChartTab(t)}
                      className={`px-3 py-1 rounded-md text-xs font-medium capitalize transition-all duration-200
                        ${chartTab === t ? "bg-[#6c63ff] text-white" : "text-[#6b6b80] hover:text-white"}`}
                    >
                      {t}
                    </button>
                  ))}
                </div>
              </div>
              <ResponsiveContainer width="100%" height={220}>
                <AreaChart data={areaData} margin={{ top: 0, right: 0, left: -20, bottom: 0 }}>
                  <defs>
                    <linearGradient id="colorRevenue" x1="0" y1="0" x2="0" y2="1">
                      <stop offset="5%"  stopColor="#6c63ff" stopOpacity={0.3} />
                      <stop offset="95%" stopColor="#6c63ff" stopOpacity={0} />
                    </linearGradient>
                    <linearGradient id="colorUsers" x1="0" y1="0" x2="0" y2="1">
                      <stop offset="5%"  stopColor="#22d3ee" stopOpacity={0.3} />
                      <stop offset="95%" stopColor="#22d3ee" stopOpacity={0} />
                    </linearGradient>
                  </defs>
                  <CartesianGrid strokeDasharray="3 3" stroke="rgba(255,255,255,0.04)" />
                  <XAxis dataKey="month" tick={{ fontSize: 11, fill: "#555568", fontFamily: "'Geist Mono', monospace" }} axisLine={false} tickLine={false} />
                  <YAxis
                    tick={{ fontSize: 10, fill: "#555568", fontFamily: "'Geist Mono', monospace" }}
                    axisLine={false} tickLine={false}
                    tickFormatter={(v) => chartTab === "revenue" ? `$${v / 1000}k` : `${v / 1000}k`}
                  />
                  <Tooltip content={<CustomTooltip />} />
                  <Area
                    type="monotone"
                    dataKey={chartTab}
                    stroke={chartTab === "revenue" ? "#6c63ff" : "#22d3ee"}
                    strokeWidth={2}
                    fill={chartTab === "revenue" ? "url(#colorRevenue)" : "url(#colorUsers)"}
                  />
                </AreaChart>
              </ResponsiveContainer>
            </div>

            {/* Pie chart */}
            <div className="bg-[#111118] border border-white/[0.07] rounded-xl p-5">
              <h2 className="text-sm font-semibold text-white mb-0.5">Traffic Sources</h2>
              <p className="text-[#6b6b80] text-xs mb-4">This month</p>
              <ResponsiveContainer width="100%" height={180}>
                <PieChart>
                  <Pie data={pieData} cx="50%" cy="50%" innerRadius={52} outerRadius={80} paddingAngle={3} dataKey="value">
                    {pieData.map((_, i) => <Cell key={i} fill={PIE_COLORS[i]} />)}
                  </Pie>
                  <Tooltip
                    content={({ active, payload }) =>
                      active && payload?.length ? (
                        <div className="bg-[#16161f] border border-white/10 rounded-lg px-3 py-2 text-xs" style={{ fontFamily: "'Outfit', sans-serif" }}>
                          <p className="text-white font-semibold">{payload[0].name}</p>
                          <p style={{ color: (payload[0].payload as { fill: string }).fill }}>{payload[0].value}%</p>
                        </div>
                      ) : null
                    }
                  />
                </PieChart>
              </ResponsiveContainer>
              <div className="space-y-2 mt-2">
                {pieData.map((d, i) => (
                  <div key={d.name} className="flex items-center justify-between text-xs">
                    <div className="flex items-center gap-2">
                      <span className="w-2 h-2 rounded-full" style={{ backgroundColor: PIE_COLORS[i] }} />
                      <span className="text-[#8888a0]">{d.name}</span>
                    </div>
                    <span className="font-semibold" style={{ fontFamily: "'Geist Mono', monospace", color: PIE_COLORS[i] }}>
                      {d.value}%
                    </span>
                  </div>
                ))}
              </div>
            </div>
          </div>

          {/* Charts row 2 */}
          <div className="grid grid-cols-1 xl:grid-cols-3 gap-4">
            {/* Bar chart */}
            <div className="bg-[#111118] border border-white/[0.07] rounded-xl p-5">
              <h2 className="text-sm font-semibold text-white mb-0.5">Daily Sales</h2>
              <p className="text-[#6b6b80] text-xs mb-4">This week</p>
              <ResponsiveContainer width="100%" height={180}>
                <BarChart data={barData} margin={{ top: 0, right: 0, left: -20, bottom: 0 }}>
                  <CartesianGrid strokeDasharray="3 3" stroke="rgba(255,255,255,0.04)" vertical={false} />
                  <XAxis dataKey="day" tick={{ fontSize: 10, fill: "#555568", fontFamily: "'Geist Mono', monospace" }} axisLine={false} tickLine={false} />
                  <YAxis tick={{ fontSize: 10, fill: "#555568", fontFamily: "'Geist Mono', monospace" }} axisLine={false} tickLine={false} tickFormatter={(v) => `$${v / 1000}k`} />
                  <Tooltip content={<CustomTooltip />} />
                  <Bar dataKey="sales" fill="#6c63ff" radius={[4, 4, 0, 0]} maxBarSize={32} />
                </BarChart>
              </ResponsiveContainer>
            </div>

            {/* Recent activity */}
            <div className="bg-[#111118] border border-white/[0.07] rounded-xl p-5">
              <div className="flex items-center justify-between mb-4">
                <h2 className="text-sm font-semibold text-white">Recent Activity</h2>
                <button className="text-[10px] text-[#6c63ff] hover:text-[#8b85ff] transition-colors">View all</button>
              </div>
              <div className="space-y-3">
                {activities.map((a) => (
                  <div key={a.user} className="flex items-start gap-3">
                    <div
                      className="w-7 h-7 rounded-full flex items-center justify-center text-[10px] font-bold shrink-0 mt-0.5"
                      style={{ backgroundColor: `${a.color}30`, color: a.color }}
                    >
                      {a.avatar}
                    </div>
                    <div className="flex-1 min-w-0">
                      <p className="text-xs font-medium text-white leading-tight truncate">{a.user}</p>
                      <p className="text-[11px] text-[#6b6b80] truncate">{a.action}</p>
                    </div>
                    <span className="text-[10px] text-[#444458] shrink-0" style={{ fontFamily: "'Geist Mono', monospace" }}>
                      {a.time}
                    </span>
                  </div>
                ))}
              </div>
            </div>

            {/* Top pages */}
            <div className="bg-[#111118] border border-white/[0.07] rounded-xl p-5">
              <div className="flex items-center justify-between mb-4">
                <h2 className="text-sm font-semibold text-white">Top Pages</h2>
                <button className="text-[10px] text-[#6c63ff] hover:text-[#8b85ff] transition-colors">View all</button>
              </div>
              <div className="space-y-3">
                {topPages.map((p) => (
                  <div key={p.page} className="flex items-center justify-between gap-2">
                    <div className="min-w-0 flex-1">
                      <p className="text-xs text-[#c4c4d4] truncate" style={{ fontFamily: "'Geist Mono', monospace" }}>
                        {p.page}
                      </p>
                      <div className="mt-1 h-1 bg-white/5 rounded-full overflow-hidden">
                        <div
                          className="h-full rounded-full bg-[#6c63ff]/60"
                          style={{ width: `${(p.views / 12480) * 100}%` }}
                        />
                      </div>
                    </div>
                    <div className="text-right shrink-0">
                      <p className="text-xs text-white font-medium" style={{ fontFamily: "'Geist Mono', monospace" }}>
                        {p.views.toLocaleString()}
                      </p>
                      <p className={`text-[10px] font-medium ${p.change >= 0 ? "text-emerald-400" : "text-red-400"}`}>
                        {p.change >= 0 ? "+" : ""}{p.change}%
                      </p>
                    </div>
                  </div>
                ))}
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  );
}
