import { useNavigate } from "react-router";
import {
  LayoutDashboard,
  BookOpen,
  BookMarked,
  Video,
  FileText,
  MessageCircleQuestion,
  Megaphone,
  ChevronLeft,
  ChevronRight,
  Zap,
  HelpCircle,
  LogOut,
} from "lucide-react";
import { useAppDispatch, useAppSelector } from "../store/hooks";
import {
  toggleCollapsed,
  closeMobile,
  setActiveItem,
} from "../store/sidebarSlice";

// ── Nav config ────────────────────────────────────────────────────────────────

type NavItem = {
  icon: React.ElementType;
  label: string;
  badge?: number;
};

const navSections: { title: string; items: NavItem[] }[] = [
  {
    title: "Menu",
    items: [
      { icon: LayoutDashboard,       label: "Dashboard" },
      { icon: BookOpen,              label: "Digital Library" },
      { icon: BookMarked,            label: "Learning Guides" },
      { icon: Video,                 label: "Video Lectures" },
      { icon: FileText,              label: "Previous Year Papers" },
      { icon: MessageCircleQuestion, label: "Doubt Support" },
      { icon: Megaphone,             label: "Announcements", badge: 3 },
    ],
  },
];

// ── NavItemRow ────────────────────────────────────────────────────────────────

function NavItemRow({
  item,
  collapsed,
  active,
  onClick,
}: {
  item: NavItem;
  collapsed: boolean;
  active: boolean;
  onClick: () => void;
}) {
  const Icon = item.icon;

  return (
    <button
      onClick={onClick}
      title={collapsed ? item.label : undefined}
      className={`w-full flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm transition-all duration-200 relative
        ${active
          ? "bg-[#6c63ff]/15 text-white"
          : "text-[#8888a0] hover:bg-white/5 hover:text-white"
        }`}
    >
      {active && (
        <span className="absolute left-0 top-1/2 -translate-y-1/2 w-[3px] h-5 rounded-r-full bg-[#6c63ff]" />
      )}
      <Icon size={17} className={`shrink-0 ${active ? "text-[#6c63ff]" : ""}`} />
      {!collapsed && (
        <>
          <span className="flex-1 text-left font-medium">{item.label}</span>
          {item.badge != null && (
            <span className="text-[10px] bg-[#6c63ff] text-white rounded-full px-1.5 py-0.5 font-semibold leading-none">
              {item.badge}
            </span>
          )}
        </>
      )}
    </button>
  );
}

// ── Sidebar ───────────────────────────────────────────────────────────────────

export default function Sidebar() {
  const dispatch = useAppDispatch();
  const { collapsed, mobileOpen, activeItem } = useAppSelector(
    (s) => s.sidebar
  );
  const navigate = useNavigate();

  return (
    <>
      {/* Mobile overlay */}
      {mobileOpen && (
        <div
          className="fixed inset-0 bg-black/60 z-40 lg:hidden"
          onClick={() => dispatch(closeMobile())}
        />
      )}

      <aside
        className={`fixed top-0 left-0 h-full z-50 flex flex-col bg-[#0d0d15] border-r border-white/[0.06]
          transition-all duration-300 ease-in-out
          ${collapsed ? "w-[68px]" : "w-[240px]"}
          ${mobileOpen ? "translate-x-0" : "-translate-x-full lg:translate-x-0"}`}
        style={{ fontFamily: "'Outfit', sans-serif" }}
      >
        {/* Logo */}
        <div
          className={`flex items-center gap-3 px-4 py-5 border-b border-white/[0.06]
            ${collapsed ? "justify-center" : ""}`}
        >
          <div className="w-8 h-8 rounded-lg bg-[#6c63ff] flex items-center justify-center shrink-0">
            <Zap size={15} className="text-white" fill="white" />
          </div>
          {!collapsed && (
            <span className="text-white font-semibold text-[15px] tracking-tight">
              Student LMS
            </span>
          )}
        </div>

        {/* Nav */}
        <nav className="flex-1 overflow-y-auto px-3 py-4 space-y-5 scrollbar-hide">
          {navSections.map((section) => (
            <div key={section.title}>
              {!collapsed && (
                <p className="text-[10px] font-semibold uppercase tracking-widest text-[#444458] px-3 mb-2">
                  {section.title}
                </p>
              )}
              <div className="space-y-0.5">
                {section.items.map((item) => (
                  <NavItemRow
                    key={item.label}
                    item={item}
                    collapsed={collapsed}
                    active={activeItem === item.label}
                    onClick={() => dispatch(setActiveItem(item.label))}
                  />
                ))}
              </div>
            </div>
          ))}
        </nav>

        {/* Footer */}
        <div className="border-t border-white/[0.06] p-3 space-y-0.5">
          <button
            className={`w-full flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm
              text-[#6b6b80] hover:text-white hover:bg-white/5 transition-all duration-200
              ${collapsed ? "justify-center" : ""}`}
          >
            <HelpCircle size={17} />
            {!collapsed && <span className="font-medium">Help & Support</span>}
          </button>

          <button
            onClick={() => navigate("/")}
            className={`w-full flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm
              text-[#6b6b80] hover:text-[#ef4444] hover:bg-[#ef4444]/5 transition-all duration-200
              ${collapsed ? "justify-center" : ""}`}
          >
            <LogOut size={17} />
            {!collapsed && <span className="font-medium">Sign out</span>}
          </button>

          <button
            onClick={() => dispatch(toggleCollapsed())}
            className="hidden lg:flex w-full items-center gap-3 px-3 py-2 rounded-lg
              text-xs text-[#444458] hover:text-[#8888a0] transition-all duration-200 mt-2"
          >
            {collapsed ? <ChevronRight size={15} /> : <ChevronLeft size={15} />}
            {!collapsed && <span>Collapse sidebar</span>}
          </button>
        </div>
      </aside>

      <style>{`
        .scrollbar-hide::-webkit-scrollbar { display: none; }
        .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
      `}</style>
    </>
  );
}
